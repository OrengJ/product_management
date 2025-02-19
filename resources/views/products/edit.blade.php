@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-gray-800 p-8 rounded shadow">
  <h2 class="text-3xl font-bold mb-6">Edit Product</h2>
  <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
      <label for="name" class="block text-gray-300 font-medium mb-1">Name</label>
      <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}"
             class="w-full p-3 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-blue-500"
             placeholder="Product Name">
      @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="description" class="block text-gray-300 font-medium mb-1">Description</label>
      <textarea name="description" id="description"
                class="w-full p-3 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-blue-500"
                placeholder="Product Description">{{ old('description', $product->description) }}</textarea>
      @error('description')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="price" class="block text-gray-300 font-medium mb-1">Price</label>
      <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $product->price) }}"
             class="w-full p-3 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-blue-500"
             placeholder="Product Price">
      @error('price')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <label for="category_id" class="block text-gray-300 font-medium mb-1">Category</label>
      <select name="category_id" id="category_id"
              class="w-full p-3 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-blue-500">
        <option value="">Select Category</option>
        @foreach($categories as $category)
          <option value="{{ $category->id }}"
            {{ (old('category_id', $product->category_id) == $category->id) ? 'selected' : '' }}>
            {{ $category->name }}
          </option>
        @endforeach
      </select>
      @error('category_id')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex justify-end">
      <button type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
        Update Product
      </button>
    </div>
  </form>
</div>
@endsection
