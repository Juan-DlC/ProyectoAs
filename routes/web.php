<?php
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

// Rutas para el cliente
Route::prefix('cliente')->group(function () {
    // Página de inicio del cliente (con menú de navegación)
    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    
    // Página de productos (Tenis, Accesorios, Cuidado)
    Route::get('seccionProducto', [ClienteController::class, 'seccionProducto'])->name('cliente.seccionProducto');
    
    // Ruta para mostrar el login
    Route::get('login', [ClienteController::class, 'login'])->name('cliente.login');
    
    // Ruta para el registro
    Route::get('registro', [ClienteController::class, 'registro'])->name('cliente.registro');
    
    // Más rutas relacionadas al cliente (si es necesario)
});

// Rutas para el administrador
Route::prefix('admin')->group(function () {
    // Página de inicio del administrador (con menú de navegación)
    Route::get('/', [ProductoController::class, 'index'])->name('admin.index');
    
    // Página para agregar productos
    Route::get('productos/agregar', [ProductoController::class, 'agregarProducto'])->name('admin.productos.agregar');
    
    // Ruta para ver todos los productos
    Route::get('productos', [ProductoController::class, 'productos'])->name('admin.productos');
    
    // Ruta para login del administrador
    Route::get('login', [ProductoController::class, 'login'])->name('admin.login');
    
    // Ruta para el registro del administrador
    Route::get('registro', [ProductoController::class, 'registro'])->name('admin.registro');
    
    // Más rutas relacionadas al administrador (si es necesario)
});
