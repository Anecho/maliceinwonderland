<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gate;
class InfoController extends Controller
{
    public function gbas() {
        if(Gate::denies('SPEAK'))
            return back();

        return view('gbas');
    }

    public function addons() {
        if(Gate::denies('SPEAK'))
            return back();

        return view('addons');
    }

}
