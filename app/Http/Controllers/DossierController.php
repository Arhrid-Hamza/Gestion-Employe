<?php

Namespace App\Http\Controllers;

use App\Models\m;
use Illuminate\Http\Request;
use App\Models\Dossier;
use App\Models\Employe;

class DossierController extends Controller
{
    public function index()
    {
        //
        $dossiers = Dossier::all();
        return view('dossiers.index')->with([
            'dossiers' => $dossiers,
        ]);
    }
    
    public function create()
    {
        //
        $employes = Employe::all();
        return view('dossiers.create' , compact('employes'));
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'Name' => 'required',
            'employe_id' => 'required',
        ]);
        $data = $request->except(['_token']);
        Dossier::create($data);
        return redirect()->route("dossiers.index")->with([
            "success" => "Dossier added successfully"
        ]);
    }
    
    public function show($id)
    {
        //
        $dossier = Dossier::where('Name', $id)->first();
        return view("dossiers.show")->with([
            "dossier" => $dossier
        ]);
    }

    public function edit($id)
    {
        //
        $employes = Employe::all();
        $dossier = Dossier::where('Name', $id)->first();
        return view("dossiers.edit" , compact('employes'))->with([
            "dossier" => $dossier
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $dossier = Dossier::where('Name', $id)->first();
        $this->validate($request, [
            'Name' => 'required|string|max:255',
            'employe_id' => 'required',
        ]);
        $data = $request->except(['_token', '_method']);
        $dossier->update($data);
        return redirect()->route("dossiers.index")->with([
            "success" => "Dossier updated successfully"
        ]);
    }

    public function destroy($id)
    {
        //
        $dossier = Dossier::where('Name', $id)->first();
        $dossier->delete();
        return redirect()->route('dossiers.index')->with([
            "success" => "Dossier deleted successfully"
        ]);
    }
}
