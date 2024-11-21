<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;


    class ClienteController extends Controller
    {
        public function index()
        {
            // Obtiene productos de la base de datos (puedes usar Eloquent para obtener los productos)
            $productos = Producto::all();  // O puedes hacer filtros si es necesario
    
            return view('cliente.index', compact('productos'));
        }
    
        public function productos()
        {
            // Obtener todos los productos para mostrarlos
            $productos = Producto::all();
    
            return view('cliente.productos', compact('productos'));
        }
    
        public function login()
        {
            // Mostrar vista de login
            return view('cliente.login');
        }
    
        public function registro()
        {
            // Mostrar vista de registro
            return view('cliente.registro');
        }
    }
    

