@extends('layouts.app')

@section('content')
  <h2>{{ $product->name }}</h2>
	@if ( session('errorDeleted') )
		<div class="alert alert-danger">
		  {{ session('errorDeleted') }}
		</div>
	@endif
	<p><b>Descripción:</b> {{ $product->description }}</p>
	<p><b>Talla:</b> {{ $product->size->size}}</p>
	<p><b>Precio:</b> {{ $product->price }}</p>
	<p><b>Stock:</b> {{ $product->stock ?? 'Sin Stock'}}</p>
	<img src="{{ $product->img1 }}" width="200">
	<img src="{{ $product->img2 }}" width="100">
	<img src="{{ $product->img3 }}" width="100">
	<hr>
	<a href="/products" class="btn btn-info">Atrás</a>
	<a href="/products/{{ $product->id }}/edit" class="btn btn-warning">Editar</a>
	<form action="{{ route('products.destroy', $product->id) }}" method="post" style="display: inline-block;">
		@csrf
		{{ method_field('DELETE') }}
		<button type="submit" class="btn btn-danger">Borrar</button>
	</form>
@endsection
