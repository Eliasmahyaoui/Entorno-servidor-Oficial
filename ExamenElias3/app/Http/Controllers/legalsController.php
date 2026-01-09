<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class legalsController extends Controller
{
    public function cookies(): View
    {
        return view('legals.cookies');
    }

    public function privacy():View
    {
        return view('legals.privacy');
    }
}
