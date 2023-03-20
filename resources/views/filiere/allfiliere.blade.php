@extends('dash.blanck-page')
@section('body-content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Filieres</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Filieres</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Filieres</h4>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addnew" data-bs-whatever="@mdo">+ Add new</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Nom de Filiere</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($filieres as $filiere)
                                                    <tr>
                                                        <td>{{ $filiere->nom }}</td>
                                                        <td>
                                                            <button type="button" value="{{ $filiere->id }}" class="btn btn-sm btnedit btn-success">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </button>
                                                            <form method="POST" action="{{ route('deletefiliere', ['id' => $filiere->id]) }}" id="delete_form{{ $loop->iteration }}" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button class="btn btn-sm btn-danger sweet-confirm" form="delete_form{{ $loop->iteration }}" data-form-id="delete_form{{ $loop->iteration }}">
                                                                <i class="la la-trash-o" data-form-id="delete_form{{ $loop->iteration }}">
                                                                </i>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- start modal add departement --}}
    <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Filiere</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('storefiliere') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nom Filiere : </label>
                            <input type="text" class="form-control" id="recipient-name" name="nom">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal add --}}
    {{-- start modal update departement --}}
    <div class="modal fade" id="update-filiere" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Filiere</h5>
                </div>
                <div class="modal-body">
                    <form id="form_update" method="POST" action="">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nom : </label>
                            <input type="text" class="form-control" id="filiere-nom" name="nom">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal update --}}
    {{-- start modal update departement --}}
    {{-- <div class="modal fade" id="delete-department" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Department</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('delete_departement') }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id" id="delete_id_department"/>
                            <div class="mb-3">
                                <h3 class="confirmation">Are you sure you want to delete this departement...?</h3>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger">Yes Delete</button>
                    </div>
                    </form>
                </div>
            </div>
        </div> --}}
    {{-- end modal update --}}
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.btnedit', function() {
                var id = $(this).val();
                var to = "/editFiliere/update/";
                $('#update-filiere').modal('show');
                $('#form_update').prop("action", to + id);
                $.ajax({
                    type: "GET",
                    url: "/edit_filiere/" + id,
                    success: function(filiere) {
                        $('#filiere-nom').val(filiere.nom);
                    }
                })
            });
        });
    </script>
@endsection
@section('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
