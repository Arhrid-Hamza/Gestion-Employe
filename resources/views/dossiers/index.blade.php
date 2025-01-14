@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title', 'Human Ressources Management App | List of Dossiers')



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
                        Dossiers
                    </h3>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Employer Responsable</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($dossiers as $key => $dossier)
                            <tr>
                                <td>{{$key += 1}}</td>
                                <td>{{$dossier->Name}}</td>
                                <td>{{$dossier->employe->fullname}}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('dossiers.show',$dossier->Name)}}"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('dossiers.edit',$dossier->Name)}}"
                                            class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$dossier->Name}}" action="{{route('dossiers.destroy',$dossier->Name)}}" method="post">
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                        <button onclick="deleteAd('{{$dossier->Name}}')"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
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
    @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
    <script>
        function deleteAd(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Document is safe :)',
                        'error'
                    )
                }
                })
        }
    </script>
@stop