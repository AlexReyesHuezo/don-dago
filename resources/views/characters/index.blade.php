@extends('layout')

@section('tu-turno')
    <div class="bg-white p-4 rounded-lg shadow-lg m-4">
        <h2 class="text-4xl font-semibold text-blue-900 text-center" id="tu-turno">Reseñas</h2>
        <ul class="space-y-4 mt-6">
            @foreach ($characters as $character)
                <li>
                    <div class="card bg-gray-100 p-4 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-gray-800">{{ $character->name }}</h3>
                        <p class="text-gray-600"><span class="font-semibold">Ocupación:</span> {{ $character->occupation }}</p>
                        <p class="text-gray-600"><span class="font-semibold">Reseña:</span> {{ $character->review }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="{{ url('characters/create') }}" class="inline-block text-center text-base bg-blue-700 text-white p-2 rounded-lg mt-4">Reseña tu personaje</a>
    </div>
@endsection