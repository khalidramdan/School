@extends('dash.blanck-page')
@section('custom-style')
    {{-- <link rel="stylesheet" href="{{asset('admin\vendor\sweetalert2\dist\sweetalert2.min.css')}}"> --}}
@endsection
@section('body-content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
                
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Admins</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('alladmin')}}">Admins</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Admins</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
                        <li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="row tab-content">
                        <div id="list-view" class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Admins  </h4>
                                    <a href="{{route('createadmin')}}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>image</th>
                                                    <th>Nom Complet</th>
                                                    <th>Role</th>
                                                    <th>Genre</th>
                                                    <th>Tel</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($admins as $admin)
                                                    <tr>
                                                        <td><img class="rounded-circle" width="35" src="{{asset('storage/'.$admin->user->image)}}" alt=""></td>
                                                        <td>{{$admin->user->prenom.' '.$admin->user->nom}}</td>
                                                        <td>{{$admin->user->role->role_nom}}</td>
                                                        <td>{{$admin->user->gender}}</td>
                                                        <td>{{$admin->user->tel}}</td>
                                                        <td>{{$admin->user->email}}</td>
                                                        <td>
                                                            <a href="{{route('profileadmin',['id' => $admin->user->id])}}" class="btn btn-sm btn-success">
                                                                <i class="la la-eye">
                                                                </i>
                                                            </a>
                                                            <a href="{{route('editadmin',['id' => $admin->user->id])}}" class="btn btn-sm btn-primary">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </a>
                                                            <form method="POST" action="{{ route('deleteadmin', ['id' => $admin->user->id]) }}" id="delete_form{{$loop->iteration}}" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button type="submit" class="btn btn-sm btn-danger sweet-confirm" form="delete_form{{$loop->iteration}}">
                                                                <i class="la la-trash-o">
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
                        <div id="grid-view" class="tab-pane fade col-lg-12">
                            <div class="row">
                                @foreach ($admins as $admin)
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="card card-profile">
                                            <div class="card-header justify-content-end pb-0">
                                                <div class="dropdown">
                                                    <button class="btn btn-link" type="button" data-toggle="dropdown">
                                                        <span class="dropdown-dots fs--1"></span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right border py-0">
                                                        <div class="py-2">
                                                            <a class="dropdown-item" href="{{route('editadmin',['id' => $admin->user->id])}}">Edit</a>
                                                            <form method="POST" action="{{ route('deleteadmin', ['id' => $admin->user->id]) }}" id="delete_form{{$loop->iteration}}" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                            <button class="btn btn-sm btn-danger sweet-confirm" form="delete_form{{$loop->iteration}}">
                                                                Delete
                                                            </button>
                                                            <a class="dropdown-item" href="{{route('editprof',['id' => $admin->user->id])}}">Edit</a>
                                                            <form class="dropdown-item text-danger" method="POST" action="{{ route('deleteprof', ['id' => $admin->id]) }}">
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
                                                            <img src="{{asset('storage/'.$admin->user->image)}}" width="100" class="img-fluid rounded-circle" alt="">
                                                        </div>
                                                        <h3 class="mt-4 mb-1">{{$admin->user->prenom.' '.$admin->user->nom}}</h3>
                                                        <ul class="list-group mb-3 list-group-flush">
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Genre :</span><strong>{{$admin->user->gender}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Tel :</span><strong>{{$admin->user->tel}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Email:</span><strong>{{$admin->user->email}}</strong></li>
                                                            <li class="list-group-item px-0 d-flex justify-content-between">
                                                                <span class="mb-0">Address:</span><strong>{{$admin->user->adresse}}</strong></li>
                                                        </ul>
                                                        <a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="{{route('profileprof', ['id' => $admin->user->id])}}">Read More</a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
@section('custom-scripts')
    {{-- <script src="{{asset('admin\vendor\sweetalert2\dist\sweetalert2.min.js')}}" ></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection