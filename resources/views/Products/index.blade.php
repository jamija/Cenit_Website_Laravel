@extends('layouts.app')

@section('title', 'Products')

@section('content')

  <h2>Lista de Usuarios - Total ({{ $allProducts }})</h2>

	<ul>
	@foreach ($products as $product)

		<li style="padding: 10px 0;">
			<h3> {{ $product->name }} </h3>
      <p> {{ $product->country }}</p>
      <a href="/users/{{ $product->id }}" class="btn btn-success">ver detalle</a>
    </li>
	@endforeach

{{$products->links()}}

@endsection
