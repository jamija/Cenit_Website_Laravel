@extends('layouts.app')

@section('title', 'User')

@section('content')

  <h2></h2>

<p> <b>Nombre : </b> {{$user->name}} </p>
<p> <b>Email : </b> {{$user->email}} </p>
<p> <b>País : </b> {{$user->country}} </p>
<img src="{{$user->avatar}}" width="350">
<br>
<a href="/users" class="btn btn-info">volver</a>
<a href="/users/{{$user->id}}/edit" class="btn btn-warning">Editar Mi data</a>
<form action="{{route('users.destroy', $user->id)}}" method="post" style="display: inline-block;">
  @csrf
  {{method_field('DELETE')}}
  <button type="submit" class="btn btn-danger">borrar</button>
</form>
@endsection
