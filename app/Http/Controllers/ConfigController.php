<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;

class ConfigController extends Controller
{
    public function index(){
        $allConfigurations = Configuration::all();
        return view('configs.index' , compact('allConfigurations'));
    }

    public function create(){
        return view('configs.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'type' => 'required',
            'value' => 'required'
        ]);
        $data = $request->except(['_token']);
        Configuration::create($data);
        return redirect()->route("configs.index")->with([
            "success" => "Config added successfully"
        ]);
    }
}
