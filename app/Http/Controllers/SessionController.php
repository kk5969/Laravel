<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller{

    
    public function getSession(Request $request){
        if($request->session()->has('match')){
            echo $request->session()->get('match');
        }else{
            echo 'Session not found';
        }
    }

    public function storeSession(Request $request){
        $request -> session()->put('match', 'Nov 14th CA3');
        echo 'Session stored';
    }

    public function deleteSession(Request $request){
        $request->session()->forget('match');
        echo 'Session deleted';
    }
}