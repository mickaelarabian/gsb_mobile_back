<?php

namespace App\Http\Controllers;
use App\Demande;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function create(Request $request){
        $demande = [
            'budget' => $request->input('budget'),
            'status' => true,
            'date' => Carbon::now(),
            'service_id' => $request->input('service_id'),
        ];
        $demande = Demande::create($demande);
        return Controller::responseJson(200, "La demande a bien été enregistrée !", $demande);
    }
}