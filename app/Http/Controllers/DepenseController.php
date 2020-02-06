<?php

namespace App\Http\Controllers;
use App\Depense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    public function create(Request $request){
        $depense = [
            'service_id' => $request->input('service_id'),
            'date' => Carbon::now(),
            'libelle' => $request->input('libelle'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix'),
        ];
        Depense::create($depense);
    }
}