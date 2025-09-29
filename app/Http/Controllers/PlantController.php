<?php

namespace App\Http\Controllers;

use App\Models\PlantsModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantController extends Controller
{
    public function index(): View
    {
        // $plant = DB::table("plants")->get();
        // $plant = PlantsModel::getAllPlants();
        $plant = PlantsModel::getAllPlants();
        return view("admin.plant_catalog", compact("plant"));
    }
}
