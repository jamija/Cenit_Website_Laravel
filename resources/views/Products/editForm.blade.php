@extends('layouts.app')

@section('content')

  <h2>Editando Productos --{{$product->name}}--</h2>

  <img src="{{$product->img1}}" width="200">

  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
          @foreach ($errors-all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
    </div>
  @endif
    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
        <div class="form-group">
          <label>Nombre:</label>
          <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid': ''}}" value="{{old('name', $product->name)}}">
          <div class="invalid-feedback">
            {{ $errors->first('name')}}
          </div>
        </div>
    </form>
@endsection
