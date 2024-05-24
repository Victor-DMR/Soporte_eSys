<?php

namespace App\Http\Controllers;

use App\Models\img_soporte;
use App\Models\Soporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SoporteController extends Controller
{
    public function index(){
        
    }
    
    public function agregar(Request $request){

        $request->validate([
            'Nit' => 'required',
            'Cliente' => 'required',
            'AnyDesk' => 'required',
            'Telefono' => 'required',
            'Tecnico' => 'required',
            'Descripcion' => 'required',
            'archivo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validar archivo de imagen
        ]);

        // Procesar el archivo de imagen
        // if ($request->hasFile('archivo')) {
        //     $file = $request->file('archivo');
        //     // Convertir la imagen a WebP
        //     $image = Image::make($file)->encode('webp', 90);
        //     // Guardar la imagen convertida
        //     $path = 'soporte_imagenes/' . uniqid() . '.webp';
        //     Storage::disk('public')->put($path, (string) $image);
        // }

        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $path = $file->store('soporte_imagenes', 'public'); // Guardar en storage/app/public/soporte_imagenes
        }

        $nit = $request->input('Nit');
        $cliente = $request->input('Cliente');
        $anyDesk = $request->input('AnyDesk');
        $telefono = $request->input('Telefono');
        $tecnico = $request->input('Tecnico');
        $descripcion = $request->input('Descripcion');

        $soporte = Soporte::create([
            'nitcli' => $nit,
            'cliente' => $cliente,
            'descrip_service' => $descripcion,
            'anydesk' => $anyDesk,
            'telefono' => $telefono,
            'observacion' => "",
            'estado_service' => "N",
            'tecnico' => $tecnico,
        ]);

        $img_soporte = img_soporte::create([
            'nit_cliente' => $nit,
            'url_img' => $path,
        ]);

        $resSave = $soporte->save();
        $img_soporte->save();

        return response()->json([
            'message' => $resSave
        ]);
    }

    public function soportes(){
        $estados = ['I', 'P', 'N'];
        $soportes = DB::table('soportes')->select(
            'nitcli',
            'cliente',
            'descrip_service',
            'anydesk',
            'telefono',
            'observacion',
            'estado_service',
            'tecnico',
            'created_at',
        )->whereIn('estado_service', $estados)->get();
        return response()->json([$soportes]);
    }
}
