@extends('admin.layout.admin')

@section('content')
  
  <h3>Products</h3>

  <ul>
    @forelse($products as $product)
      <li>Name of Product:{{$product->name}} </li>

      @empty

      <h3>No products</h3>

    @endforelse
  </ul>

@endsection