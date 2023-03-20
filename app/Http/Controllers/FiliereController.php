<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Http\Requests\FiliereRequest;

class FiliereController extends Controller
{
    public function store(FiliereRequest $request){
        $filiere = new Filiere();
        $filiere->nom = $request->nom;
        $filiere->save();
        return redirect()->route('allfiliere');
    }

    public function showall(){
        $filieres = Filiere::all();
        return view('filiere.allfiliere',compact('filieres'));
    }

    public function edit($id){
        $filiere = Filiere::find($id);
        return $filiere;
    }

    public function update(Request $request, $id){
        $filiere = Filiere::find($id);
        $filiere->update($request->all());
        return redirect()->route('allfiliere');
    }

    public function destroy($id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->route('allfiliere');
    }
}
