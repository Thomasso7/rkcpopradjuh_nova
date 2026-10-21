<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
{
    public function kancelaria()
    {
        return view('navbar.kancelaria');
    }

    public function krst()
    {
        return view('navbar.krst');
    }

    public function oznamy()
    {
        $oznamy = DB::table('announcements')->get();
        return view('navbar.oznamy', compact('oznamy'));
    }

    public function birmovanie()
    {
        return view('navbar.birmovanie');
    }

    public function manzelstvo()
    {
        return view('navbar.manzelstvo');
    }

    public function pohreb()
    {
        return view('navbar.pohreb');
    }

    public function spovedanie()
    {
        $exceptions = DB::table('exceptions')->get();
        return view('navbar.spovedanie', compact('exceptions'));
    }

    public function kontakt()
    {
        return view('navbar.kontakt');
    }

    public function aktuality()
    {
        $aktuality = DB::table('actualities')->orderByDesc("id")->get();
        return view('navbar.aktuality', compact("aktuality"));
    }

    public function dane()
    {
        return view('navbar.dane');
    }
}
