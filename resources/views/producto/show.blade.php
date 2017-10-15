@extends('layouts.app')
@section('content')
  <div class="container text-center">
     @include('producto.product', ['producto' => $producto])
  </div>
@endsection
