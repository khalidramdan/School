@extends('dash.blanck-page')
@section('custom-style')
@endsection
@section('body-content')
<div class="content-body m-1">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h3 class="fw-bold">Emploi du Temps</h3>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('emploi')}}">Emploi</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Emploi du Temps</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col mb-2">
                <h6 class="fw-bold">CLASS :*</h6>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Choix--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col mb-2">
                <h6 class="fw-bold">PROF :*</h6>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Choix--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col mb-2">
                <h6 class="fw-bold">MATIERE :*</h6>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Choix--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col mb-2">
                <h6 class="fw-bold">SALLE :*</h6>
                <select class="form-select" aria-label="Default select example">
                    <option selected>--Choix--</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-lg-12">
                <div class="row tab-content">
                    <div id="list-view" class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="emploi" class="display" style="min-width: 1245px">
                                        <thead>
                                            <tr class="head_emploi">
                                                <th>HEURES/JOURS</th>
                                                <th>LUNDI</th>
                                                <th>MARDI</th>
                                                <th>MERCREDI</th>
                                                <th>JEUDI</th>
                                                <th>VENDREDI</th>
                                                <th>SAMEDI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="time" aria-label="Last name" class="form-control">
                                                      </div>
                                                </td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                                <td><div class="col mb-2">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected></option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-2">
                <button class="btn btn-primary me-md-2" type="button">Sauvegarde</button>
            </div>
        </div>

    </div>
</div>
@endsection
@section('custom-scripts')