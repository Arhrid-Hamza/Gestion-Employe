@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Human Ressources Management App | List of Employes')



@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    <h3 class="text-center text-uppercase">
                        Employes
                    </h3>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Departement</th>
                                <th>Hired</th>
                                <th>Salaire</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employes as $key => $employe)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$employe->fullname}}</td>
                                    <td>{{$employe->departement->name}}</td>
                                    <td>{{$employe->hire_date}}</td>
                                    <td>{{$employe->Salaire}} MAD TTC</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
@stop