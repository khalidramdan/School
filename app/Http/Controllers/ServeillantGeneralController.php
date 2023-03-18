<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Surveillant_Generale;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Http\Requests\SGRequest;
use Illuminate\Support\Carbon;

class ServeillantGeneralController extends Controller
{
    public function create(){
        $to = route('storeSG');
        $title = 'Ajouter SG';
        return view('serveillantGeneral.add_edit_serveillantGeneral',compact('to','title'));
    }

    public function store(SGRequest $request){
        // store user
        $user = new User();
        if($request->image){
            $path = $request->file('image')->store('users/SG');
            $user->image = $path;
        }
        $user->email = $request->prenom . $request->nom . '@surveillantGeneral';
        $user->password = hash::make($request->prenom . $request->nom);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->cin = $request->cin;
        $user->adresse = $request->adresse;
        $user->tel = $request->tel;
        $user->gender = $request->gender;
        $user->dateNaissance = $request->dateNaissance;
        $user->description = $request->description;
        $role=Role::find(3);
        if($role){
            if($role->users()->save($user)){
                // store prof
                $SG = new Surveillant_Generale();
                $user->SG()->save($SG);
                return redirect('/allSurveillantGeneral');
            }
        }
    }

    public function showall(){
        $SG = Surveillant_Generale::all();
        return view('serveillantGeneral.allserveillantGeneral',compact('SG'));
    }

    public function edit($id){
        $user = User::find($id);
        $to = route('updateSG', ['id' => $id]);
        $title = 'Modifier SG';
        return view('serveillantGeneral.add_edit_serveillantGeneral', compact('user', 'to', 'title'));
    }

    public function update(SGRequest $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('allSG');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('allSG')->with('success', 'SG deleted successfully.');
    }

    public function profile($id){
        $user = User::find($id);
        $age = Carbon::parse($user->dateNaissance)->age;
        return view('serveillantGeneral.profileserveillantGeneral',compact('user','age'));
    }
}
