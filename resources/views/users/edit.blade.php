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
                        Update User
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('users.update',$user->name) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" name="name" value="{{old("name",$user->name)}}" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label fw-bold">E-mail</label>
                            <input type="mail" name="email" value="{{old("email",$user->email)}}" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="usertype" class="form-label fw-bold">Usertype</label>
                            <input type="text" name="usertype" value="{{old("usertype",$user->usertype)}}" placeholder="Usertype" class="form-control">
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
