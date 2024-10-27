<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Departement;

class HomeController extends Controller{
    
    public function AfficherEmployes(){
        $employes = Employe::all();
        return view('user/employes')->with([
            'employes' => $employes,
        ]);
    }

    public function AfficherDepartements(){
        $departements = Departement::all();
        return view('user/departements')->with([
            'departements' => $departements,
        ]);
    }

    public function AfficherCetificate()
    {
        $employe = Employe::first();
        return view("user/certificate")->with([
            "employe" => $employe
        ]);
    }

    public function AfficherVacationRequest()
    {
        $employe = Employe::first();
        return view("user/vacation")->with([
            "employe" => $employe
        ]);
    }
}
