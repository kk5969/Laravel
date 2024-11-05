<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class monthcontroller extends Controller
{
    public function nummonth($num){
        {
            // Handle the logic to return month names based on the number using if-else
            if ($num == 1) {
                return "<h1>January</h1>";
            } elseif ($num == 2) {
                return "<h1>February</h1>";
            } elseif ($num == 3) {
                return "<h1>March</h1>";
            } else {
                return "<h1>Month not found</h1>";
            }
        }
    }
}
