@extends('adminlte::page')


@section('title')
    Human Ressources Management App | Home
@endsection

@section('content_header')
    <h1>Dashboard</h1>
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
                    <a href="{{url('user/employes')}}" class="small-box-footer">
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
                    <a href="{{url('user/departements')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>       
        <div class=" my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Work <br> Certificate</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <a href="{{url('user/certificate')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div> 
        <div class=" my-3">
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Vacation <br> Request</h3>
                    </div>
                    <div class="icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <a href="{{url('user/vacation')}}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div> 
    </div>
@endsection