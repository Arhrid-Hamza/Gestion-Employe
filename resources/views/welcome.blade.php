@extends('layouts.main')

@section('title')
    Human Ressources Management App | Welcome
@endsection

@section('content')
    <style>
        .background {
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 80%; 
            max-width: 500px; 
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto; 
        }

        .card-header h2 {
            margin-bottom: 10px;
        }

        .card-header p {
            margin-bottom: 0;
        }
    </style>
    <div class="background">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    <div class="card p-4">
                        <div class="card-header bg-light text-center">
                            <h2 class="p-2">
                                <span style="color:blue">Human Ressources</span> Management Application
                            </h2>
                            <p>An Easily Management App <i class="fa fa-gear"></i></p>
                            <br>
                            <p>
                            Notre application de gestion des ressources humaines vous permet de gérer facilement vos employés et départements. 
                            Avec de nombreuses fonctionnalités, comme l'ajout, la modification et la suppression, le tout en utilisant des opérations CRUD simples.
                            <br> 
                            Cette application utilise Adminlte pour la page d'accueil, offrant une vue dynamique et un design attrayant !
                            </p>
                        </div>
                        <div class="card-body p-3 text-center">
                            @guest
                                <a href="{{url('/login')}}" class="btn btn-outline-primary btn-text-center">
                                    Login
                                </a>
                            @endguest
                            @auth
                                <a href="{{url('admin/home')}}" class="btn btn-outline-primary">
                                    Home
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
