<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    public function showall(){
        $salles = Salle::all();
        return view('salle.allsalles',compact('salles'));
    }
}
