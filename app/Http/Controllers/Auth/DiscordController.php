<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Discord\OAuth\Discord as Discord;

use Auth;
use Hash;

use App\User;

class DiscordController extends Controller
{
    public function login() {
        error_reporting(E_ALL ^ E_DEPRECATED);

        $provider = new \Discord\OAuth\Discord([
            'clientId'     => '409731739456634880',
            'clientSecret' => 'jaQ7uiIx-Cl6Tv80XVjx6D2zfePhjrj8',
            'redirectUri'  => 'http://www.maliceinwonderland.tk/discord/redirect',
        ]);

        $options = ['scope' => ['identify','guilds']];

        // If we don't have an authorization code then get one
        if (!isset($_GET['code'])) {
            // set URL for redirect after loging in
            session(['loginRedirectRoute' => url()->previous()]);

            // Fetch the authorization URL from the provider; this returns the
            // urlAuthorize option and generates and applies any necessary parameters
            // (e.g. state).
            $authorizationUrl = $provider->getAuthorizationUrl($options);

            // Get the state generated for you and store it to the session.
            session(['oauth2state' => $provider->getState()]);

            // Redirect the user to the authorization URL.
            return redirect($authorizationUrl);
        } else {
            $redirectUrl = session('loginRedirectRoute');
            session()->forget('loginRedirectRoute');
        }

        // Check given state against previously stored one to mitigate CSRF attack
        if (empty($_GET['state']) || (empty(session('oauth2state')) && $_GET['state'] !== session('oauth2state')) ) {
            if (session('oauth2state')) {
                session()->forget('oauth2state');
            }
            return redirect($provider->getAuthorizationUrl($options));
        }

        // Try to get an access token using the authorization code grant.
        try {
            $accessToken = $provider->getAccessToken('authorization_code', [
                'code' => $_GET['code']
            ]);

            // We have an access token, which we may use in authenticated
            // requests against the service provider's API.
            $accessToken->getToken();
            $accessToken->getRefreshToken();
            $accessToken->getExpires();
            $accessToken->hasExpired();

            // Using the access token, we may look up details about the
            // resource owner.
            $resourceOwner = $provider->getResourceOwner($accessToken);
            $discord = $resourceOwner->toArray();

            $discord['permissions'] = 0;
            foreach($resourceOwner->guilds as $guild) {
                if(264072965514067968 == $guild->id){
                    #if(0x2 & $guild->permissions) { dump("Yes, you can kick players.");
                    #} else { dump("No, you can not kick players."); }
                    $discord['permissions'] = $guild->permissions;
                }
            }

            $discord = [
                'id' => $discord['id'],
                'username' => $discord['username'],
                'email' => $discord['email'],
                'password' => Hash::make('password'),
                'discriminator' => $discord['discriminator'],
                'avatar' => $discord['avatar']?'https://cdn.discordapp.com/avatars/'.$discord['id'].'/'.$discord['avatar'].'.png':NULL,
                'verified' => $discord['verified'],
                'mfa_enabled' => $discord['mfa_enabled'],
                'permissions' => $discord['permissions'],
            ];

            if(!$user = User::find($discord['id']))
                $user = User::create($discord);
            else
                $user->update($discord);

            if(Auth::attempt(['id' => $user->id, 'password' => 'password'], true)) {
                return redirect($redirectUrl);
           }
           return redirect('/')->withErrors("Could not authorize");
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Failed to get the access token or user details.
            if($e->getMessage() == 'Error in response from Discord: invalid_grant')
                return redirect($provider->getAuthorizationUrl($options));

            return redirect('/')->withErrors("ERROR: ".$e->getMessage());
        }
    }
}
