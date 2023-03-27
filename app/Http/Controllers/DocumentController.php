<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create(){
        $to = route('storedocument');
        $title = 'Ajouter document';
        return view('document.adddocument',compact('to','title'));
    }

    public function store(DocumentRequest $request){
        // store document
        $document = new Document();
        if($request->image){
            $path = $request->file('image')->store('documents');
            $document->image = $path;
        }
        $document->nom = $request->nom;
        $document->tel = $request->tel;
        $document->student_number = $request->student_number;
        $document->description = $request->description;
        $document->save();
        return redirect()->route("alldocument");
    }

    public function edit($id){
        $document = document::find($id);
        $to = route('updatedocument', ['id' => $id]);
        $title = 'Modifier document';
        return view('document.adddocument', compact('document','to', 'title'));
    }

    public function update(documentRequest $request, $id){
        $document = document::find($id);
        $document->update($request->all());
        return redirect()->route('editdocument', $document->id);
    }

    public function showall(){
        $documents = Document::all();
        return view('document.alldocument',compact('documents'));
    }

    public function profile($id){
        $document = Document::find($id);
        $age = Carbon::parse($document->dateNaissance)->age;
        return view('document.profiledocument',compact('document','age'));
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect()->route('alldocument')->with('success', 'Cour deleted successfully.');
    }

}


