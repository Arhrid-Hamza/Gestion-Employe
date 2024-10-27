@extends('adminlte::page')


@section('title')
    Human Ressources Management App | Home
@endsection

@section('content_header')
    <h1>Dashborad</h1>
@endsection

@section('content')
    <div class="container">
        <div class="my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{App\Models\Employe::count()}}</h3>
                        <p>Total Employes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{url('admin/employes')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class=" my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{App\Models\User::count()}}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="{{url('admin/users')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class=" my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{App\Models\Departement::count()}}</h3>
                        <p>Total Departements</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <a href="{{url('admin/departements')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class=" my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>{{App\Models\Dossier::count()}}</h3>
                        <p>Total Dossiers</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-folder"></i>
                    </div>
                    <a href="{{url('admin/dossiers')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection