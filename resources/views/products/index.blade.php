@extends('layouts.app')

@section('content')
<div class="space-y-6">
  <div class="flex items-center justify-between">
    <h2 class="text-3xl font-bold">Products</h2>
    <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
      Add New Product
    </a>
  </div>

  @if(session('success'))
    <div class="bg-green-800 border border-green-600 text-green-200 px-4 py-3 rounded">
      {{ session('success') }}
    </div>
  @endif

  <div class="overflow-x-auto">
    <table class="min-w-full bg-gray-800 rounded shadow">
      <thead>
        <tr class="bg-gray-700 text-gray-300 uppercase text-sm">
          <th class="py-3 px-6 text-left">Name</th>
          <th class="py-3 px-6 text-left">Price</th>
          <th class="py-3 px-6 text-left">Category</th>
          <th class="py-3 px-6 text-center">Actions</th>
        </tr>
      </thead>
      <tbody class="text-gray-200 text-sm">
        @foreach($products as $product)
          <tr class="border-b border-gray-700 hover:bg-gray-700">
            <td class="py-3 px-6 text-left">{{ $product->name }}</td>
            <td class="py-3 px-6 text-left">${{ $product->price }}</td>
            <td class="py-3 px-6 text-left">
              {{ $product->category ? $product->category->name : 'Uncategorized' }}
            </td>
            <td class="py-3 px-6 text-center">
              <div class="flex items-center justify-center space-x-4">
                <a href="{{ route('products.edit', $product) }}" class="text-blue-400 hover:text-blue-600">
                  Edit
                </a>
                <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="text-red-400 hover:text-red-600">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
