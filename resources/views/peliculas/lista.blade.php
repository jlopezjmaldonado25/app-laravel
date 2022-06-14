@extends('layouts.app')

@section('content')
    <div class="container p-8">

        <div class="flex justify-between">
            <nav class="rounded-md w-1/2">
                <nav class="rounded-md w-full">
                    <ol class="list-reset flex">
                        <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
                        <li><span class="text-gray-500 mx-2">/</span></li>
                        <li class="text-gray-500">Listado de Películas</li>
                    </ol>
            </nav>

            <button onclick="javascript:window.location='{{ route('peliculas.crear') }}'" type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Agregar Película</button>
        </div>
    </div>


    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            #
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Nombre
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Descripción
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            Género
                        </th>
                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                            
                        </th>
                    </tr>
                </thead class="border-b">
                <tbody>
                    @foreach ($peliculas as $pelicula)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $pelicula->id }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{ $pelicula->nombre }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                 {{ $pelicula->descripcion }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                 {{ $pelicula->genero }}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <div class="flex space-x-2 justify-end">
                                    <div>
                                        <button onclick="javascript:window.location='{{ route('peliculas.ver',['id' => $pelicula->id]) }}'" type="button" class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">Editar</button>
                                    </div>
                                </div>
                            </td>
                        </tr class="bg-white border-b">
                     @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

@endsection