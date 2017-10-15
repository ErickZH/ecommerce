@extends('layouts.app')
@section('title','Productos Programacion JJE')
@section('content')
  <div class="text-center products-container">
      <div class="row">
          @foreach ($productos as $producto)
              <div class="col-xs-12 col-sm-6">
                @include('producto.product', ['producto' => $producto])
              </div>
          @endforeach
      </div>
      <div>
          {{ $productos->links() }}
      </div>
  </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/from.js')}}"></script>
@endsection
