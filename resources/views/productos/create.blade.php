@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-success text-white">
        <h3>Nuevo Producto</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver al listado</a>
        </form>
    </div>
</div>
@endsection
