@extends('adminlte::page')

@section('title', 'Human Ressources Management App | Update')

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
                        Update Dossier
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('dossiers.update',$dossier->Name) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="Name" class="form-label fw-bold">Name</label>
                            <input type="text" name="Name" value="{{old("name",$dossier->Name)}}" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                                <label for="employe_id" class="form-label">Employe Name</label>
                                <select class="form-control" name="employe_id"
                                    id="employe_id" value="{{old('employe_id')}}">
                                    <option value="">{{old("employe_id",$dossier->employe->fullname)}}</option>
                                    @foreach($employes as $employe)
                                        <option value="{{$employe->id}}">{{$employe->fullname}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
