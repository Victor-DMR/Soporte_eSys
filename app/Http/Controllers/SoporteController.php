<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoporteController extends Controller
{
    public function index(){
        
    }
    
    public function agregar(Request $request){
        $data = $request->json('data');
        if ($data == 'hola') {
            return response()->json($data);
        } else {
            return response()->json($data);
        }
        
        return response()->json($data);
        // DB::table('soportes');
    }
}
