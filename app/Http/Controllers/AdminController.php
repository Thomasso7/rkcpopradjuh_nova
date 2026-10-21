<?php

namespace App\Http\Controllers;

use App\Models\Actuality;
use App\Models\Announcement;
use App\Models\Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pridaj_aktualitu()
    {
        return view('Admin.pridaj_aktualitu');
    }

    public function pridaj_oznamy()
    {
        return view('Admin.pridaj_oznamy');
    }

    public function pridaj_vynimku()
    {
        return view('Admin.pridaj_vynimku');
    }

    public function zmaz_vynimku($id)
    {
        $exception = Exception::find($id);
        $exception->delete();
        return redirect()->back();
    }

    public function zmaz_aktualitu($id)
    {
        $Actuality = Actuality::find($id);
        $Actuality->delete();
        return redirect()->back();
    }

    public function zmaz_oznamy($id)
    {
        $announcement = Announcement::find($id);
        $announcement->delete();
        return redirect()->back();
    }

    public function uprav_aktualitu($id)
    {
        $aktualita = Actuality::find($id);
        return view('Admin.uprav_aktualitu', compact('aktualita'));
    }

    public function uprav_oznamy($id)
    {
        $oznamy = Announcement::find($id);
        return view('Admin.uprav_oznamy', compact('oznamy'));
    }

    public function potvrdAktualitu(Request $request)
    {
        $request->validate([
            'obrazok'=> 'required|image',
            'datum'=> 'required',
            'nazov'=> 'required|string|min:1',
            'text'=> 'required|string|min:1'
        ], [
            'obrazok.required'=> 'Musíte zvoliť obrázok!',
            'datum.required'=> 'Musíte zadať dátum!',
            'nazov.required'=> 'Musíte zadať názov!',
            'nazov.min'=> 'Názov musí obsahovať aspoň jeden znak!',
            'text.required'=> 'Musíte zadať text!',
            'text.min'=> 'Text musí obsahovať aspoň jeden znak!'
        ]);
        $actuality = new Actuality;
        $obrazok = $request->obrazok;
        if ($obrazok) {
            $nazov_obrazku = $obrazok->getClientOriginalName();
            $obrazok->move(public_path('Subory'), $nazov_obrazku);
            $actuality->obrazok = $nazov_obrazku;
        }
        $actuality->datum = $request->datum;
        $actuality->nazov = $request->nazov;
        $actuality->text = $request->text;
        if ($request->plagat != null) {
            $plagat = $request->plagat;
            if ($plagat) {
                $nazov_plagatu = $plagat->getClientOriginalName();
                $plagat->move(public_path('Subory'), $nazov_plagatu);
                $actuality->plagat = $nazov_plagatu;
            }
        }
        $actuality->save();
        return redirect('/');
    }

    public function potvrdUpravenieAktuality(Request $request, $id)
    {
        $request->validate([
            'datum'=> 'required',
            'nazov'=> 'required|string|min:1',
            'text'=> 'required|string|min:1'
        ], [
            'datum.required'=> 'Musíte zadať dátum!',
            'nazov.required'=> 'Musíte zadať názov!',
            'nazov.min'=> 'Názov musí obsahovať aspoň jeden znak!',
            'text.required'=> 'Musíte zadať text!',
            'text.min'=> 'Text musí obsahovať aspoň jeden znak!'
        ]);
        $actuality = Actuality::find($id);
        $actuality->datum = $request->datum;
        $actuality->nazov = $request->nazov;
        $actuality->text = $request->text;
        if ($request->obrazok != null) {
            $obrazok = $request->obrazok;
            if ($obrazok) {
                $nazov_obrazku = $obrazok->getClientOriginalName();
                $obrazok->move(public_path('Subory'), $nazov_obrazku);
                $actuality->obrazok = $nazov_obrazku;
            }
        }
        if ($request->plagat != null) {
            $plagat = $request->plagat;
            if ($plagat) {
                $nazov_plagatu = $plagat->getClientOriginalName();
                $plagat->move(public_path('Subory'), $nazov_plagatu);
                $actuality->plagat = $nazov_plagatu;
            }
        }
        $actuality->save();
        return redirect('/');
    }

    public function potvrdOznamy(Request $request)
    {
        $request->validate([
           'nazov'=> 'required|string|min:1',
           'subor'=> 'required'
        ], [
            'nazov.required'=> 'Musíte zadať názov!',
            'nazov.min'=> 'Názov musí obsahovať aspoň 1 znak!',
            'subor.required' => 'Musíte zadať súbor!'
        ]);
        $announcement = new Announcement;
        $announcement->nazov = $request->nazov;
        $subor = $request->subor;
        if ($subor) {
            $nazov_suboru = $subor->getClientOriginalName();
            $subor->move(public_path('Subory'), $nazov_suboru);
            $announcement->subor = $nazov_suboru;
        }
        $announcement->save();
        return redirect('/');
    }

    public function potvrdUpravenieOznamov(Request $request, $id)
    {
        $request->validate([
            'nazov'=> 'required|string|min:1',
        ], [
            'nazov.required'=> 'Musíte zadať názov!',
            'nazov.min'=> 'Názov musí obsahovať aspoň 1 znak!',
        ]);
        $announcement = Announcement::find($id);
        $announcement->nazov = $request->nazov;
        if ($request->subor != null) {
            $subor = $request->subor;
            if ($subor) {
                $nazov_suboru = $subor->getClientOriginalName();
                $subor->move(public_path('Subory'), $nazov_suboru);
                $announcement->subor = $nazov_suboru;
            }
        }
        $announcement->save();
        return redirect('/');
    }

    public function potvrdVynimku(Request $request)
    {
        $exception = new Exception;
        $exception->exception = $request->vynimka;
        $exception->save();
        return redirect('/');
    }
}
