@extends('layouts.app')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-info text-white">
        <h3>Detalle del Producto</h3>
    </div>
    <div class="card-body">
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
        <p><strong>Stock:</strong> {{ $producto->stock }}</p>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
</div>
@endsection
