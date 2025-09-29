<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlantsModel extends Model
{
    use HasFactory;
    
    protected $table = 'plants';
    protected $fillable = [
        'name',
        'picture',
        'type',
        'color',
        'description',
        'plant_state',
    ];

    public static function getAllPlants()
    {
        return DB::table('plants')->get();
    }
}
