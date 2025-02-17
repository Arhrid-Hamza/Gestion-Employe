<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Departement;
use Illuminate\Http\Request;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes' => $employes,
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departements = Departement::all();
        return view('employes.create' , compact('departements'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'registration_number' => 'required|numeric|unique:employes,registration_number,',
            'poste' => 'required|string|max:255',
            'departement_id' => 'required',
            'hire_date' => 'required|date',
            'e_mail' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'Salaire' => 'required',
        ]);
        $data = $request->except(['_token']);
        Employe::create($data);
        return redirect()->route("employes.index")->with([
            "success" => "Employe added successfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.show")->with([
            "employe" => $employe
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $departements = Departement::all();
        $employe = Employe::where('registration_number', $id)->first();
        return view('employes.edit' , compact('departements'))->with([
            "employe" => $employe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employe = Employe::where('registration_number', $id)->first();
        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'registration_number' => 'required|numeric|unique:employes,id,registration_number' . $employe->registration_number,
            'departement_id' => 'required',
            'poste' => 'required|string|max:255',
            'hire_date' => 'required|date',
            'e_mail' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'Salaire' => 'required',
        ]);
        $data = $request->except(['_token', '_method']);
        $employe->update($data);
        return redirect()->route("employes.index")->with([
            "success" => "Employe updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employe = Employe::where('registration_number', $id)->first();
        $employe->delete();
        return redirect()->route('employes.index')->with([
            "success" => "Employe deleted successfully"
        ]);
    }

    public function getWorkCertificate($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.certificate")->with([
            "employe" => $employe
        ]);
    }

    public function vacationRequest($id)
    {
        $employe = Employe::where('registration_number', $id)->first();
        return view("employes.vacation")->with([
            "employe" => $employe
        ]);
    }
}