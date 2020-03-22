<?php

namespace App\Http\Controllers;
use App\Depense;
use App\Service;
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
        $depense = Depense::create($depense);
        $id = $request->input('service_id');
        $num = $request->input('prix');
        $service = Service::findOrFail($id);
        $service->update(['budget' => $service->budget - $num]);
        return Controller::responseJson(200, "La dépense a bien été saisie !", $depense);
    }
}