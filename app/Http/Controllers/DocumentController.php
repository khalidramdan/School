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
        return view('document.adddocument');
    }
}
