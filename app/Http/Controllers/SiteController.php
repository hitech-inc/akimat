<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
    	return view('frontend.index');
    }

    public function competition()
    {
    	return view('frontend.competition');
    }

    public function enpf()
    {
    	return view('frontend.enpf');
    }

    public function infoMessage()
    {
        return view('frontend.information-message');
    }

    public function innerCompetition()
    {
        return view('frontend.inner-competition');
    }
}
