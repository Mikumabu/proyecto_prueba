<?php

namespace App\Http\Controllers;

use App\Models\Prueba;
use App\Http\Requests\StorePruebaRequest;
use App\Http\Requests\UpdatePruebaRequest;

class PruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('comida.palta');
    }

    public function listarPaltas(){
        $a = "Tengo mucha comida";
        $b = "Tengo mucha hambre";
        $c = [
            'comida' => $a,
            'hambre' => $b
        ];

        return response()->json($c);
    }

    public function agregarAlgo(Request $request){
        dd($request->all());
    }
}
