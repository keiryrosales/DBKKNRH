<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class respuestaController extends Controller
{
    
/**
 * 
 * Descripción de prueba para la clase Desarrollo de BackEnd y API desarrollada por todo el equipo el 19/10/2023.
 * @return \Illuminate\Http\Response
 *
 * @OA\Get(
 *     path="/api/ejecutar",
 *     tags={"ejecutar"},
 *     summary="Este es un endpoint o metodo para obtener datos y mostrarlos al usuario",
 *     @OA\Response(
 *         response=200,
 *         description="Se devuelven todos los registros cuando la consulta sea satisfactoria"
 *     ),
 *     @OA\Response(
 *         response=500,
 *         description="No se pudo realizar la ejecución al parecer hubo un error interno"
 *     )
 * ) 
 */
public function index() {

    return response()->json([
        "success"=>true,
        "data"=>"HOLA, SOY KEIRY ROSALES",
        "message"=>"registro encontrado",
        "cantidad"=>1
    ]);
}

    
}
