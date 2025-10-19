<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function jidelnicek()
    {
        return view('jidelnicek');
    }

    public function onas()
    {
        return view ('onas');
    }

    public function nastym()
    {
        return view ('nastym');
    }

    public function clanky()
    {
        return view ('clanky');
    }

    public function prihlaseni()
    {
        return view ('prihlaseni');
    }
}
