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
                        Add New Departement
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('departements.store') }}" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group mb-3">
                                <label for="name">Departement Name</label>
                                <input type="text" class="form-control"
                                    name="name" placeholder="Departement Name"
                                    value="{{old('name')}}">
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
