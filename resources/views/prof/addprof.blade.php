@extends('dash.blanck-page')
@section('body-content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
                
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>{{$title}}</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('allprof')}}">Professors</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$title}}</a></li>
                    </ol>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $to }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @if ($title == 'Modifier professeur')
                                    @method('PUT')
                                @endif
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Prenom</label>
                                            <input type="text" class="form-control" value="{{(isset($user))? $user->prenom : ''}}" name="prenom">
                                            @if($errors->has('prenom'))
                                                <span class="error" style="color:red">{{ $errors->first('prenom') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Nom</label>
                                            <input type="text" class="form-control" value="{{(isset($user))? $user->nom : ''}}" name="nom">
                                            @if($errors->has('nom'))
                                                <span class="error" style="color:red">{{ $errors->first('nom') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">CIN</label>
                                            <input type="text" class="form-control" value="{{(isset($user))? $user->cin : ''}}" name="cin">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Adresse</label>
                                            <input type="adress" class="form-control" value="{{(isset($user))? $user->adresse : ''}}" name="adresse">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Tel</label>
                                            <input type="tel" class="form-control" value="{{(isset($user))? $user->tel : ''}}" name="tel">
                                        </div>
                                    </div>
                                    @if ($title == 'Modifier professeur')
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input type="tel" class="form-control" value="{{(isset($user))? $user->email : ''}}" name="email">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Genre</label>
                                            <select class="form-control" name="gender">
                                                <option value="" hidden selected>Genre</option>
                                                <option value="Male">Homme</option>
                                                <option value="Female">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Department</label>
                                            <select class="form-control" name="departement_id">
                                                <option value="" hidden selected>Departement</option>
                                                @foreach ($departements as $departement)
                                                    <option value="{{$departement->id}}">{{$departement->departement_nom}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('departement_id'))
                                                <span class="error" style="color:red">{{ $errors->first('departement_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Date de Naissance</label>
                                            <input class="datepicker-default form-control" value="{{(isset($user))? $user->dateNaissance : ''}}" id="datepicker1" name="dateNaissance">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="description" style="resize: none">{{(isset($user))? $user->description : ''}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group fallback w-100">
                                            <input type="file" class="dropify" data-default-file="" name="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-light">Cencel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection