@extends('dash.blanck-page')
@section('body-content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>ALL Niveaux</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">ALL Niveaux</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#list-view" data-toggle="tab"
                                class="nav-link btn-primary mr-1 show active">List View</a></li>
                        <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid
                                View</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ALL Niveaux </h4>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#addnew" data-bs-whatever="@mdo">+ Add New</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nom Niveau</th>
                                                    <th>Nom Filiere</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($niveaux as $niveau)
                                                    @if ($niveau->niveau_id == null)
                                                        <tr>
                                                            <td>{{ $niveau->id }}</td>
                                                            <td><button value="{{ $niveau->id }}" id="sous_niveau" class="sous_niveau" style="border: none;background-color: transparent;">{{ $niveau->nom }}</button>
                                                            </td>
                                                            <td>{{ $niveau->filiere->nom}}</td>
                                                            <td>
                                                                <button type="button" value="{{ $niveau->id }}"
                                                                    class="btn btn-sm btnedit btn-success">
                                                                    <i class="la la-pencil">
                                                                    </i>
                                                                </button>
                                                                <button type="button" value="{{ $niveau->id }}"
                                                                    class="btn btn-sm btndelete btn-danger">
                                                                    <i class="la la-trash-o">
                                                                    </i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div id="grid-view" class="tab-pane fade col-lg-12">
                            <div class="row">
                                @foreach ($profs as $prof)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="card card-profile">
                                            <div class="card-header justify-content-end pb-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                        <span class="dropdown-dots fs--1"></span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right border py-0">
                                                        <div class="py-2">
                                                            <a class="dropdown-item" href="{{route('editprof',['id' => $prof->id])}}">Edit</a>
                                                            <form class="dropdown-item text-danger" method="POST" action="{{ route('deleteprof', ['id' => $prof->id]) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="submit" value="Delete">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="card-body pt-2">
                                                    <div class="text-center">
                                                        <div class="profile-photo">
                                                            <img src="{{$prof->image}}" width="100" class="img-fluid rounded-circle" alt="">
                                                        </div>
                                                        <h3 class="mt-4 mb-1">{{$prof->prenom.' '.$prof->nom}}</h3>
                                                        <ul class="list-group mb-3 list-group-flush">
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Genre :</span><strong>{{$prof->gender}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Tel :</span><strong>{{$prof->tel}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Email:</span><strong>{{$prof->user->email}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Address:</span><strong>{{$prof->adresse}}</strong></li>
                                                        </ul>
                                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="{{route('profileprof', ['id' => $prof->id])}}">Read More</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- start modal all sous Niveau --}}
    <div class="modal fade" id="sous-Niveau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ALL sous  Niveau</h5>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="sous-niveau" class="display" style="min-width: 266px">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sous Niveau</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="tbody_sous_niveau">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal all sous niveau --}}
        {{-- start modal update sous Niveau --}}
        <div class="modal fade" id="update-sous-niveau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Sous Niveau</h5>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ url('update_sous_Niveau') }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_sous_Niveau" id="id_sous_Niveau" />
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Name sous Niveau : </label>
                                <input type="text" class="form-control" id="Sous-Niveau-nom" name="Sous_Niveau_nom">
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="niveau"
                                    id="Sous_niveau_id">
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" name="filiere"
                                    id="filiere_id_sous_niveau">
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal update sous niveau --}}
    {{-- start modal add Niveau --}}
    <div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Niveau</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('add_niveau') }}">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name Niveau : </label>
                            <input type="text" class="form-control" id="recipient-name" name="niveau_nom">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="filiere">
                                <option selected value="">select filiere</option>
                                @foreach ($filieres as $key => $value)
                                    <option value="{{ $value->id }}" @selected(old('value') == $value)>{{ $value->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="niveau">
                                <option selected value="">select Niveau </option>
                                @foreach ($niveaux as $niveau)
                                    @if ($niveau->niveau_id == null)
                                        <option value="{{ $niveau->id }}" @selected(old('niveau->nom') == $niveau->nom)>
                                            {{ $niveau->nom }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal add Niveau --}}
    {{-- start modal update Niveau --}}
    <div class="modal fade" id="update-Niveau" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Niveau</h5>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ url('update_Niveau') }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="id_Niveau" />
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name Niveau : </label>
                            <input type="text" class="form-control" id="Niveau-nom" name="Niveau_nom">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="niveau"
                                id="niveau_id">
                                <option selected value="">select Niveau </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="filiere"
                                id="filiere_id">
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal update --}}
    {{-- start modal delete Niveau --}}
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            // start traitement sous niveau
            $(document).on('click','.sous_niveau',function(){
                var id = $(this).val();
                $('#sous-Niveau').modal('show');
                $.ajax({
                    type: "GET",
                    url : "/sous_niveau/" + id,
                    success: function (response) {
                        // console.log(response);
                        $('.tbody_sous_niveau').empty();
                        $.each(response.sous_niveau ,function(i,item){
                          var tbody = "<tr><td>"+item.id+"</td><td>"+item.nom+"</td><td><button type='button' value='"+item.id+"' class='btn btn-sm btnedit_sous_niveau btn-success'> <i class='la la-pencil'></i></button><button type='submit' value='"+item.id+"' class='btn btn-sm btndelete_sous_niveau btn-danger'><i class='la la-trash-o'></i</button></td></tr>";
                            $('.tbody_sous_niveau').append(tbody);
                            
                        });
                      }
                })
            })
            $(document).on('click','.btnedit_sous_niveau',function () { 
                var id_sous_niveau = $(this).val();
                $('#update-sous-niveau').modal('show');
                $('#id_sous_Niveau').val(id_sous_niveau);
                $.ajax({
                    type: "GET",
                    url : "/edit_sous_niveau/" + id_sous_niveau,
                    success: function(response){
                        $("#Sous-Niveau-nom").val(response.sous_niveau.nom);
                        $("#Sous_niveau_id").empty();
                        $("#Sous_niveau_id").append(
                            "<option selected value=''>select Niveau </option>");
                        $.each(response.all_niveau, function(i, sous_niveau) {
                            $('#Sous_niveau_id').append($('<option>', {
                                value: sous_niveau.id,
                                text: sous_niveau.nom
                            }));
                        });
                        $("#filiere_id_sous_niveau").empty();
                        $("#filiere_id_sous_niveau").append(
                            "<option selected value=''>select Filiere </option>");
                        $.each(response.all_filieres, function(i, filiere) {
                            $('#filiere_id_sous_niveau').append($('<option>', {
                                value: filiere.id,
                                text: filiere.nom
                            }));
                        });
                    }
                })
             });
             $(document).on('click', '.btndelete_sous_niveau', function(e) {
                var id = $(this).val();
                swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                debugger
                if (result) {
                    $.ajax({
                        type : "DELETE",
                        url : "/delete/"+id,
                        error : function (error) {
                            console.log(error);
                          },
                        success:function(response){
                            if(response.status == 200){
                                $(e.target).parents('tr').remove();
                                $('#sous-Niveau').modal('hide');
                            }
                        }
                    })
                }
            });
            });
            // end traitement sous niveau 

            $(document).on('click', '.btnedit', function() {
                debugger
                var id = $(this).val();
                $('#update-Niveau').modal('show');
                $('#id_Niveau').val(id);
                $.ajax({
                    type: "GET",
                    url: "/edit_niveau/" + id,
                    success: function(response) {
                        $("#Niveau-nom").val(response.niveau.nom);
                        $("#filiere_id").empty();
                        $("#filiere_id").append(
                            "<option selected value=''>select Filiere </option>");
                        $.each(response.filieres, function(i, item) {
                            $('#filiere_id').append($('<option>', {
                                value: item.id,
                                text: item.nom
                            }));
                        });

                    }
                })
            });
            $(document).on('click', '.btndelete', function(e) {
                var id = $(this).val();
                swal({
                title: "Are you sure you want to delete this record?",
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancel","Yes!"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                debugger
                if (result) {
                    $.ajax({
                        type : "DELETE",
                        url : "/delete-niveau/"+id,
                        error : function (error) {
                            console.log(error);
                          },
                        success:function(response){
                            if(response.status == 200){
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
