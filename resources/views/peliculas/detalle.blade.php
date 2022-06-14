@extends('layouts.app')

@section('content')

    <div class="container p-8">

        <div class="flex justify-between">
            <nav class="rounded-md w-1/2">
                <nav class="rounded-md w-full">
                    <ol class="list-reset flex">
                        <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
                        <li><span class="text-gray-500 mx-2">/</span></li>
                        <li class="text-gray-500">Detalle de Película</li>
                    </ol>
            </nav>

            <button onclick="javascript:window.location='{{ route('peliculas') }}'" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Regresar</button>
        </div>
    </div>

    <div class="container p-8">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="mt-2 bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <form method="POST" action="{{ route('peliculas') }}">
                <input type="hidden" name="id_pelicula" value="{{old('id') ?? $pelicula->id ?? ''}}">
                @csrf
                <div class="form-group mb-6">
                    <label for="codigo" class="form-label inline-block mb-2 text-gray-700">Código</label>

                    <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="codigo" name="codigo"
                        aria-describedby="emailHelp" placeholder="Código"
                        value="{{old('codigo') ?? $pelicula->codigo ?? ''}}">
                </div>
                <div class="form-group mb-6">
                    <label for="nombre" class="form-label inline-block mb-2 text-gray-700">Nombre Película</label>

                    <input type="text" class="form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="nombre" name="nombre"
                        aria-describedby="emailHelp" placeholder="Nombre Película" value="{{old('nombre') ?? $pelicula->nombre ?? ''}}">
                </div>
                <div class="form-group mb-6">
                    <label for="descripcion" class="form-label inline-block mb-2 text-gray-700">Descripción</label>
                    <input type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="descripcion" name="descripcion"
                        placeholder="Descripción" value="{{old('descripcion') ?? $pelicula->descripcion ?? ''}}">
                </div>
                <div class="form-group mb-6">
                    <label for="genero" class="form-label inline-block mb-2 text-gray-700">Género</label>
                    <input type="text" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="genero" name="genero"
                        placeholder="Género" value="{{old('genero') ?? $pelicula->genero ?? ''}}">
                </div>
                
                <button type="submit" class="
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Guardar</button>
            </form>
            </div>
    </div>
@endsection