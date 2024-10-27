@extends('adminlte::page')

@section('title', 'Human Ressources Management App | '.$departement->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Show Departement
                    </h3>
                </div>
                <hr/>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="form-control">
                        {{$departement->name}}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


