<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Gate;
use Session;

use App\Spec;
use App\Application;

class RecruitmentController extends Controller
{
    protected $classes = [
        'deathknight' => ['blood','unholy','frost'],
        'druid' => ['balance','feral_dps','feral_tank','restoration'],
        'hunter' => ['beastmastery','survival','markmanship'],
        'mage' => ['fire','arcane','frost'],
        'paladin' => ['retribution','protection','holy'],
        'priest' => ['shadow','holy','discipline'],
        'rogue' => ['combat','mutilate','subtetly'],
        'shaman' => ['enhacement','restoration','elemental'],
        'warlock' => ['affliction','demonology','destruction'],
        'warrior' => ['arms','fury','protection'],
    ];

    protected $color = [
        'deathknight' => '#C41F3B',
        'druid' => '#FF7D0A',
        'hunter' => '#ABD473',
        'mage' => '#69CCF0 ',
        'paladin' => '#F58CBA ',
        'priest' => '#FFFFFF',
        'rogue' => '#FFF569',
        'shaman' => '#0070DE',
        'warlock' => '#9482C9',
        'warrior' => '#C79C6E',
    ];

    public function list() {
        $specs = Spec::all();
        foreach($specs as $spec) {
            $classes[$spec->class][$spec->name] = $spec;
            $color[$spec->class] = $spec->color;
        }

        return view('recruitment.list', [
            'classes' =>  $classes,
            'color'   =>  $color,
        ]);
    }

    public function toggle(Spec $spec) {
      if(Gate::denies('ADMINISTRATOR'))
        return back()->withErrors(['You are not alowed to adjust progress']);

        /*foreach($this->classes as $class => $specs) {
            foreach($specs as $spec) {
              $spec = Spec::create([
                  'class' => $class,
                  'name' => $spec,
                  'color' => $this->color[$class],
                  'recruiting' => true
              ]);
            }
        }*/

        $spec->recruiting = !$spec->recruiting;
        $spec->save();

        return back();
    }

    public function apply() {
        if(!Auth::check()) {
            session(['loginRedirectRoute' => url()->current()]);
            return redirect('/login');
        }

        if(Gate::allows('SPEAK')) {
            return back()->withErrors(['You are already a guild member, why would you need to apply again? :)']);
        }

        $alreadyApplied = Application::where('user_id',Auth::user()->id)->first();
        if($alreadyApplied) {
            return view('recruitment.application', [
                'application' => $alreadyApplied
            ]);
        }

        return view('recruitment.apply', [
            'classes' => $this->classes,
        ]);
    }

    public function submit(Request $request) {

        $validatedData = $request->validate([
            "class" => "required",
            "mainspec" => "required",
            "offspec" => "required",
            "available_on" => "required",
            "timezone" => "required",
            "additional_info" => "",
            "terms" => "",
        ]);

        $application = Application::create([
            'user_id' => Auth::user()->id,
            'class' => $request->class,
            'mainspec' => $request->mainspec,
            'offspec' => $request->offspec,
            'available_on' => json_encode($request->available_on),
            'timezone' => $request->timezone,
            'additional_info' => $request->additional_info,
        ]);
        
        return redirect('/apply');
    }
}
