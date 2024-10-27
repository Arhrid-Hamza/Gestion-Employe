@extends('adminlte::page')

@section('title', 'Human Ressources Management App | Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Add New Config
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('configs.store') }}" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group mb-3">
                                <label for="type">Type de Config</label>
                                <select name="type" id="type" class="form-control">
                                    <option value=""></option>
                                    <option value="App_Name"> App_Name </option>
                                    <option value="Date_Paiement"> Date_Paiement </option>
                                    <option value="Dev_name">Developpeur Name</option>
                                    <option value="Another">Autres options</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="value">Value</label>
                                <input type="text" class="form-control"
                                    name="value"
                                    value="{{old('value')}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary " type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
