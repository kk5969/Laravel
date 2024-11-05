<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cricketController extends Controller
{

    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'Player' => 'required|max:50',
        'Country' =>'required|max:50',
    ]);
    
    DB::table('cricket') -> insert([
        'player' => $validatedData['player'],
        'country' => $validatedData['country'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    

}
}
