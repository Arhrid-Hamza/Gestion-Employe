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
                        Add new employe
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('employes.store') }}" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group mb-3">
                                <label for="fullname">FullName</label>
                                <input type="text" class="form-control"
                                    name="fullname" placeholder="Fullname"
                                    value="{{old('fullname')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="registration_number">Registration_Number</label>
                                <input type="text" class="form-control"
                                    name="registration_number" placeholder="Registration_Number"
                                    value="{{old('registration_number')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="poste">Poste</label>
                                <input type="text" class="form-control"
                                    name="poste" placeholder="Poste"
                                    value="{{old('poste')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="departement_id" class="form-label">Departement</label>
                                <select class="form-control" name="departement_id"
                                    id="departement_id" value="{{old('departement_id')}}">
                                    <option value=""> </option>
                                    @foreach($departements as $departement)
                                        <option value="{{$departement->id}}">{{$departement->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="hire_date">Hire_date</label>
                                <input type="date" class="form-control"
                                    name="hire_date" placeholder="Hire_date"
                                    value="{{old('hire_date')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="e_mail">e_mail</label>
                                <input type="mail" class="form-control"
                                    name="e_mail" placeholder="e_mail"
                                    value="{{old('e_mail')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control"
                                    name="phone" placeholder="Phone"
                                    value="{{old('phone')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control"
                                    name="address" placeholder="Address"
                                    value="{{old('address')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control"
                                    name="city" placeholder="City"
                                    value="{{old('city')}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="Salaire">Salaire</label>
                                <input type="number" class="form-control"
                                    name="Salaire" placeholder="Salaire"
                                    value="{{old('Salaire')}}">
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
