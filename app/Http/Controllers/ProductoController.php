<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

/**
 * Controlador para la gestión de productos
 * Maneja las operaciones CRUD de productos
 */
class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'descripcion' => 'nullable|string',
        'precio' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ]);

    Producto::create($request->all());

    return redirect()->route('productos.index')
                     ->with('success', 'Producto creado correctamente.');
}


    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:100',
        'descripcion' => 'nullable|string',
        'precio' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ]);

    $producto = Producto::findOrFail($id);
    $producto->update($request->all());

    return redirect()->route('productos.index')
                     ->with('success', 'Producto actualizado correctamente.');
}


    public function destroy($id)
{
    $producto = Producto::findOrFail($id);
    $producto->delete();

    return redirect()->route('productos.index')
                     ->with('success', 'Producto eliminado correctamente.');
}

}