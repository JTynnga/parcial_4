<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }
    public function show($id)
    {
        return Usuario::find($id);
    }
}
