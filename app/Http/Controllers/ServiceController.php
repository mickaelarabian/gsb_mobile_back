<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\User_Service;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
    public function getAllFromPersonnel($id)
    {
        $services = User_Service::where('user_id', $id)->get();
        //$services = Service::where('user_id', $id)->get();
        return Controller::responseJson(200, "Les services ont été retournés", $services);
    }

    public function getService($id)
    {
        try {
            $service = Service::where('id', $id)
                ->with(['personnels', 'depenses'])
                ->first();
        } catch (ModelNotFoundException $e) {
        }
        return Controller::responseJson(200, "Le service $id a été retourné", $service);
    }
}
