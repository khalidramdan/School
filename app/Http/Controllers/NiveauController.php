<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Filiere;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('Niveaux.niveau');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $niveaux = Niveau::all();
        $filieres  = Filiere::all();
        return view('Niveaux.niveau', compact('niveaux', 'filieres'));
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $niveau = new Niveau();
        $niveau->nom = $request->input('niveau_nom');
        $niveau->niveau_id = $request->niveau;
        $niveau->filiere_id = $request->filiere;
        $niveau->save();
        return redirect('/all_Niveau');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $niveau = Niveau::find($id);
        $filieres = Filiere::all();
        return response()->json([
            "status" => 200,
            "niveau" => $niveau,
            "filieres" => $filieres
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->input('id');
        $niveau = Niveau::find($id);
        $niveau->nom = $request->input('Niveau_nom');
        $niveau->niveau_id = $request->niveau;
        $niveau->filiere_id = $request->filiere;
        $niveau->update();
        return redirect('/all_Niveau');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $niveau = Niveau::find($id);
        $niveau->delete();
        return response()->json([
            "status" => 200,
            "sous_niveau" => $niveau
        ]);
    }

     //start traitement sous niveau
     public function all_sous_niveau_by_niveau($id)
     {
         $sous_niveau = Niveau::where('niveau_id', $id)->get();
         if (count($sous_niveau) == 0) {
             echo "<script>alert('aucun sous niveau')</script>";
         } else {
             return response()->json([
                 "status" => 200,
                 "sous_niveau" => $sous_niveau
             ]);
         }
     }
    public function edit_sous_niveau($id)
    {
        $sous_niveau = Niveau::find($id);
        $all_niveau= Niveau::where('id','<>',$id)->get();
        $all_filieres = Filiere::all();
        return response()->json([
            "status" => 200,
            'sous_niveau' => $sous_niveau,
            "all_niveau" => $all_niveau,
            "all_filieres" => $all_filieres
        ]);
    }
    public function update_sous_niveau(Request $request)
    {
        //
        $id = $request->input('id_sous_Niveau');
        $niveau = Niveau::find($id);
        $niveau->nom = $request->input('Sous_Niveau_nom');
        $niveau->niveau_id = $request->niveau;
        $niveau->filiere_id = $request->filiere;
        $niveau->update();
        return redirect('/all_Niveau');
    }
    public function delete_sous_niveau($id)
    {
        # code...
        $sous_niveau = Niveau::find($id);
        $sous_niveau->delete();
        return response()->json([
            "status" => 200,
            "sous_niveau" => $sous_niveau
        ]);
    }
}
