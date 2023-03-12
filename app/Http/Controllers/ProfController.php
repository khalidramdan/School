<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Prof;
use App\Http\Requests\ProfRequest;
use App\Models\Departement;
use Illuminate\Support\Carbon;

class ProfController extends Controller
{
    public function create(){
        $departements = Departement::all();
        return view('prof.addprof',compact('departements'));
    }

    public function store(ProfRequest $request){
        // store user
        $user = new User();
        $user->email = $request->prenom . $request->nom . '@prof';
        $user->password = encrypt($request->prenom . $request->nom);
        $user->role_id = 2;
        $user->save();

        $last_user = User::latest()->first()->id;

        
        // store prof
        $prof = new prof();
        if($prof->image){
            $file = $request->file('image');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $prof->image = $filename;
        }
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->cin = $request->cin;
        $prof->adresse = $request->adresse;
        $prof->dateInscription = $request->dateInscription;
        $prof->tel = $request->tel;
        $prof->gender = $request->gender;
        $prof->departement_id = $request->departement_id;
        $prof->dateNaissance = $request->dateNaissance;
        $prof->user_id = $last_user;
        $prof->description = $request->description;
        $prof->save();
        return redirect('/allProf');
    }

    public function showall(){
        $profs = prof::all();
        return view('prof.allprof',compact('profs'));
    }

    public function edit($id){
        $prof = Prof::find($id);
        $departements = Departement::all();
        return view('prof.editprof', compact('prof','departements'));
    }

    public function update(Request $request, $id){
        $prof = Prof::find($id);
        $prof->update($request->all());
        return redirect()->route('editprof', $prof->id);
    }

    public function destroy($id)
    {
        $prof = Prof::find($id);
        $prof->delete();

        return redirect()->route('allprof')->with('success', 'Prof deleted successfully.');
    }

    public function profile($id){
        $prof = Prof::find($id);
        $age = Carbon::parse($prof->dateNaissance)->age;
        return view('prof.profileprof',compact('prof','age'));
    }
}
