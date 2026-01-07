<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalController extends Controller
{
    public function cookies():View
    {
        return view('legal.cookies');
    }


    public function privacy():View
    {
        return view('legal.privacy');
    }
}
