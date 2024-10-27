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
                        Add New Dossier
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('dossiers.store') }}" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group mb-3">
                                <label for="Name">Document  Name</label>
                                <input type="text" class="form-control"
                                    name="Name" placeholder="Document Name"
                                    value="{{old('Name')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="employe_id" class="form-label">Employer Responsable </label>
                                <select class="form-control" name="employe_id"
                                    id="employe_id" value="{{old('employe_id')}}">
                                    <option value=""> </option>
                                    @foreach($employes as $employe)
                                        <option value="{{$employe->id}}">{{$employe->fullname}}</option>
                                    @endforeach
                                </select>
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
