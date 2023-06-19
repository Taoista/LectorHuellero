<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FingerTemplate;
use App\Models\CreateFinger;

use Illuminate\Support\Facades\Route;


class ApiController extends Controller
{


    function glob_finger_print(Request $request)
    {

        $finger_print = $request->finger_print;

        $finger = new FingerTemplate();
        $finger->finger_print = $request->finger_print;
        $finger->save();

        return "desde laravel";
    }

    function get_img_bit_map(Request $request)
    {
        // ? inserta en la base de datos
        $finger = new CreateFinger();
        $finger->save();

        // ? crea la imagen
        $imagen = $request->file('imagen');

        // ? Guardar la imagen en el directorio deseado (por ejemplo, storage/app/public)
        $imagen->storeAs('public', 'demo.jpg');


        $name = "demo";
        $urlImagen = $imagen->storeAs('public', $name.'.jpg');

        return 'guardado en larvel';
    }

}
