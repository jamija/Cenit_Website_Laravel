@extends('layouts.app')

@section('content')

  <h2>Lista de Usuarios - Total ({{ $allUsers }})</h2>

	<ul>
	@foreach ($users as $user)

		<li style="padding: 10px 0;">
			<h3> {{ $user->name }} </h3>
      <p> {{ $user->country }}</p>
      <a href="/users/{{ $user->id }}" class="btn btn-success">ver detalle</a>
    </li>
	@endforeach

{{$users->links()}}

@endsection
