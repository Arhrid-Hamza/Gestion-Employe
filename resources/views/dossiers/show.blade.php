@extends('adminlte::page')

@section('title', 'Human Ressources Management App | '.$dossier->Name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Show Dossier
                    </h3>
                </div>
                <hr/>
                <div class="form-group mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <div class="form-control">
                        {{$dossier->Name}}
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Employe's Name</label>
                    <div class="form-control">
                        {{$dossier->employe->fullname}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


