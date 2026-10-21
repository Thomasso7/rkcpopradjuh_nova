<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $aktuality = DB::table("actualities")->get();
        $oznamy = DB::table("announcements")->get();
        return view('home.index', compact('aktuality', 'oznamy'));
    }
}
