<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnsenController extends Controller
{
    //
    public function index()
    {
        $onsen = Onsen::find(1);
        return view('onsen.index', compact('onsen'));
    }

}
