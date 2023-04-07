@extends('dash.blanck-page')
@section('body-content')
    <div class="content-body  mx-auto">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Matiéres</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Matiéres</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12 w-auto ">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Matiére</h4>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addnew" data-bs-whatever="@mdo">+ Add new</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        @if (session()->has('message'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>Nom Matiére</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($matieres as $matiere)
                                                    <tr>
                                                        <td>{{ $matiere->nom }}</td>
                                                        <td>
                                                            <button type="button" value="{{ $matiere->id }}"
                                                                class="btn btn-sm btnedit btn-success">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </button>
                                                            <form method="POST" action="#"
                                                                id="delete_form{{ $loop->iteration }}" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button class="btn btn-sm btn-danger sweet-confirm"
                                                                value="{{ $matiere->id }}"
                                                                form="delete_form{{ $loop->iteration }}"
                                                                data-form-id="delete_form{{ $loop->iteration }}">
                                                                <i class="la la-trash-o"
                                                                    data-form-id="delete_form{{ $loop->iteration }}">
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
                <div class="col-sm-6">
                    <div class="card h-auto">
                        <div class="card-body" id="add">
                            <form method="POST" action="{{ url('add_matiere') }}">
                                @csrf
                                @method('POST')
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nom de la matiere : </label>
                                    <input type="text" class="form-control" id="recipient-name" name="nom_matiere"
                                        min="1">
                                </div>
                                <button type="submit" id="add_matiere" class="btn btn-primary">+ Add Matiere</button>
                            </form>
                        </div>
                        <div class="card-body" id="update">
                            <form method="POST" action="{{ url('update_matiere') }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" class="form-control" id="id_matiere" name="id_matiere" />
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nom de la matiere : </label>
                                    <input type="text" class="form-control" id="nom_matiere" name="nom_matiere">
                                </div>
                                <button type="submit" id="add_matiere" class="btn btn-success">update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $("#add").show();
            $("#update").hide();

            $(document).on('click', '.btnedit', function() {
                var id = $(this).val();
                $("#add").hide();
                $("#update").show();
                $('#id_matiere').val(id);
                $.ajax({
                    type: "GET",
                    url: "/edit/" + id,
                    success: function(response) {
                        $("#nom_matiere").val(response.matiere.nom)
                    }
                });
            });
            $(document).on('click', '.sweet-confirm', function(e) {
                var id = $(this).val();
                swal({
                    title: "Are you sure you want to delete this record?",
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    type: "warning",
                    buttons: ["Cancel", "Yes!"],
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result) {
                        $.ajax({
                            type: "DELETE",
                            url: "/delete-matiere/" + id,
                            error: function(error) {
                                console.log(error);
                            },
                            success: function(response) {
                                if (response.status == 200) {
                                    $(e.target).parents('tr').remove();
                                }
                            }
                        })
                    }
                });
            });

        });
    </script>
@endsection
