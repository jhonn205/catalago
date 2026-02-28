@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-warning text-dark">
        <h3>Editar Producto</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" 
                       value="{{ old('nombre', $producto->nombre) }}" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control">{{ old('descripcion', $producto->descripcion) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" 
                       value="{{ old('precio', $producto->precio) }}" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" 
                       value="{{ old('stock', $producto->stock) }}" required>
            </div>

            <button type="submit" class="btn btn-warning">Actualizar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver al listado</a>
        </form>
    </div>
</div>
@endsection
