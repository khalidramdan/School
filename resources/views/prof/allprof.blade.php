@extends('dash.blanck-page')
@section('body-content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
                
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Professors</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Professors</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Professors</a></li>
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
                                    <h4 class="card-title">All Professors  </h4>
                                    <a href="{{route('createprof')}}" class="btn btn-primary">+ Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Nom Complet</th>
                                                    <th>Department</th>
                                                    <th>Genre</th>
                                                    <th>Tel</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($profs as $prof)
                                                    <tr>
                                                        <td><img class="rounded-circle" width="35" src="{{$prof->image}}" alt=""></td>
                                                        <td>{{$prof->prenom.' '.$prof->nom}}</td>
                                                        <td>{{$prof->departement->departement_nom}}</td>
                                                        <td>{{$prof->gender}}</td>
                                                        <td><a href="javascript:void(0);"><strong>{{$prof->tel}}</strong></a></td>
                                                        <td><a href="javascript:void(0);"><strong>{{$prof->user->email}}</strong></a></td>
                                                        <td>
                                                            <a href="{{route('profileprof',['id' => $prof->id])}}" class="btn btn-sm btn-success">
                                                                <i class="la la-eye">
                                                                </i>
                                                            </a>
                                                            <a href="{{route('editprof',['id' => $prof->id])}}" class="btn btn-sm btn-primary">
                                                                <i class="la la-pencil">
                                                                </i>
                                                            </a>
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                                <i class="la la-trash-o">
                                                                    <form method="POST" action="{{ route('deleteprof', ['id' => $prof->id]) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <input type="submit" value="Delete">
                                                                    </form>
                                                                </i>
                                                            </a>
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
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection