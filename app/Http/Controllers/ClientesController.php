<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function data (){
        $data=Clientes::all();

        return response()->json($data);
    }
}
