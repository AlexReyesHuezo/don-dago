@extends('layout')

@section('tu-turno')
<div class="max-w-lg mx-auto my-10 bg-white p-8 rounded-lg shadow-md">
  <form action="{{ url('characters') }}" method="post" class="space-y-4">
    @csrf
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
      <input type="text" name="name" id="name" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <label for="occupation" class="block text-sm font-medium text-gray-700">Ocupación</label>
      <input type="text" name="occupation" id="occupation" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div>
      <label for="review" class="block text-sm font-medium text-gray-700">Reseña</label>
      <textarea name="review" id="review" class="mt-1 w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" rows="4"></textarea>
    </div>

    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Agregar personaje</button>
  </form>
</div>
@endsection