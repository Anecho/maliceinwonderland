<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gate;

use App\Instance;
use App\Application;

class ApplicationController extends Controller
{
    public function list() {
        if(Gate::denies('ADMINISTRATOR'))
            return redirect('/')->withErrors('You are not allowed no access this page.');

        $applications = Application::orderBy('id', 'desc')->get();

        return view('applications',[
            'applications' => $applications
        ]);
    }
}
