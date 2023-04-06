<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Http\Request;
class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $matieres = matiere::all();
        return view('Matiere.matiere',compact('matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $matiere = new matiere();
        $matiere->nom = $request->input('nom_matiere');
        $matiere->save();
        return redirect('/matiere');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function show(matiere $matiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $matiere = matiere::find($id);
        return response()->json([
            "status" => 200,
            "matiere" => $matiere,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id = $request->input('id_matiere');
        $matiere = matiere::find($id);
        $matiere->nom = $request->input('nom_matiere');
        $matiere->update();
        return redirect('/matiere');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matiere  $matiere
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $matiere = matiere::find($id);
        $matiere->delete();
        return response()->json([
            "status" => 200,
            "sous_niveau" => $matiere
        ]);
    }
}
