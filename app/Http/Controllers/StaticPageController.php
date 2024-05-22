<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function welcome()
    {
        $events = Calendar::all() ?? [];
        return view('pages.welcome',compact('events'));
    }
}
