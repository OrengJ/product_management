@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-gray-800 p-8 rounded shadow">
  <h2 class="text-3xl font-bold mb-6">Add New Category</h2>
  <form action="{{ route('categories.store') }}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label for="name" class="block text-gray-300 font-medium mb-1">Category Name</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}"
             class="w-full p-3 bg-gray-700 border border-gray-600 rounded focus:outline-none focus:border-blue-500"
             placeholder="Category Name">
      @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>
    <div class="flex justify-end">
      <button type="submit"
              class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Create Category
      </button>
    </div>
  </form>
</div>
@endsection
