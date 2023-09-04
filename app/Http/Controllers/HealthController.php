<?php

namespace App\Http\Controllers;

use App\Models\Health;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $health = Health::create([
            'user_id' => Auth::user()->id,
            'age' => $request->age,
            'height' => $request->height,
            'weight' => $request->weight,
            'activity' => $request->activity,
            'besactivity' => $request->bestActivity,
        ]);
        if($health){
            return response()->json($health);
        }
    }
}
