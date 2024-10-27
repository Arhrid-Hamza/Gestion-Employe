<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{

    public function index()
    {
        //
        $departements = Departement::all();
        return view('departements.index')->with([
            'departements' => $departements,
        ]);
    }
    
    public function create()
    {
        //
        return view('departements.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = $request->except(['_token']);
        Departement::create($data);
        return redirect()->route("departements.index")->with([
            "success" => "Departement added successfully"
        ]);
    }
    
    public function show($id)
    {
        //
        $departement = Departement::where('name', $id)->first();
        return view("departements.show")->with([
            "departement" => $departement
        ]);
    }

    public function edit($id)
    {
        //
        $departement = Departement::where('name', $id)->first();
        return view("departements.edit")->with([
            "departement" => $departement
        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $departement = Departement::where('name', $id)->first();
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $data = $request->except(['_token', '_method']);
        $departement->update($data);
        return redirect()->route("departements.index")->with([
            "success" => "Departement updated successfully"
        ]);
    }

    public function destroy($id)
    {
        //
        $departement = Departement::where('name', $id)->first();
        $departement->delete();
        return redirect()->route('departements.index')->with([
            "success" => "Departement deleted successfully"
        ]);
    }
}
