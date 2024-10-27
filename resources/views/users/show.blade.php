@extends('adminlte::page')

@section('title', 'Human Ressources Management App | '.$user->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Show User
                    </h3>
                </div>
                <hr/>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="form-control">
                        {{$user->name}}
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">E-mail</label>
                    <div class="form-control">
                        {{$user->email}}
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Usertype</label>
                    <div class="form-control">
                        {{$user->usertype}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


