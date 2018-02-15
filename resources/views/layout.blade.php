<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Malice in Wonderland</title>

        <!-- Fonts -->
        <link href="{{ asset('css/sketchy.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="margin:7px">
        <a class="navbar-brand" href="/">Malice in Wonderland</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/recruitment">Recruitment <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Rules</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="/progress">Progress</a>
                </li>
                @can('SPEAK')
                <li class="nav-item">
                    <a class="nav-link" href="/gbas" onmouseover="$WowheadPower.showTooltip(event, 'Guild Bank Aid System v0.3<br><small style=\'color: #ffd100\'>Care about bills no more!</small>', 'inv_gizmo_healthpotionpack')" onmousemove="$WowheadPower.moveTooltip(event)" onmouseout="$WowheadPower.hideTooltip();">GBAS v0.3</a>
                </li>
                @endcan
                @can('ADMINISTRATOR')
                <li class="nav-item">
                    <a class="nav-link" href="/applications">Applications</a>
                </li>
                @endcan
                @can('SPEAK')
                <li class="nav-item">
                    <a class="nav-link" href="/addons">Addons</a>
                </li>
                @endcan
            </ul>
            @auth
                <form class="form-inline my-2 my-lg-0" action="/logout" method="post">
                    {{ csrf_field() }}
                    @if(Auth::user()->avatar)
                    <img height="45" src="{{Auth::user()->avatar}}" alt="avatar" class="rounded">
                    @endif
                    <button class="btn btn-secondary my-2 my-sm-0" name="logout" type="submit">Logout {{Auth::user()->username}}</button>
                </form>
            @else
                <a class="btn btn-secondary my-2 my-sm-0" href="/login">Discord login</a>
            @endauth
        </div>
    </nav>

    @if($errors->any())
        <div class="alert alert-dismissible alert-danger" style="margin:7px">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4 class="alert-heading">Warning!</h4>
          <p class="mb-0">{{$errors->first()}}</p>
        </div>
    @endif

    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://wotlk.evowow.com/static/widgets/power.js"></script><script>var aowow_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </body>
</html>
