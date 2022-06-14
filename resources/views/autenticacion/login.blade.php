@extends('layouts.auth')

@section('content')
    <div class="container">
        <section class="h-full gradient-form bg-gray-200 md:h-screen">
            <div class="container py-12 px-6 h-full">
                <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="xl:w-10/12">
                    <div class="block bg-white shadow-lg rounded-lg">
                    <div class="lg:flex lg:flex-wrap g-0">
                        <div class="lg:w-6/12 px-4 md:px-0">
                        <div class="md:p-12 md:mx-6">

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

                            @if(!empty(session('errorMessageAutenticacion')))
                                 <div class="mt-2 bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full" role="alert">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                                    </svg>
                                    {{ session('errorMessageAutenticacion') }}
                                </div>                     
                            @endif

                            <div class="text-center">
                                <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Somos el equipo Lotus</h4>
                            </div>
                            <form method="POST" action="{{ route('admin.login') }}">
                                @csrf
                                <p class="mb-4">Por favor, inicie sesión en su cuenta</p>
                                <div class="mb-4">
                                    <input
                                    type="email"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1"
                                    placeholder="Correo"
                                    name="email"
                                    value="admin@prueba.app"
                                    />
                                </div>
                                <div class="mb-4">
                                    <input
                                    type="password"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1"
                                    placeholder="Contraseña"
                                    name="password"
                                    />
                                </div>
                                <div class="text-center pt-1 mb-12 pb-1">
                                    <button
                                    class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                    type="submit"
                                    data-mdb-ripple="true"
                                    data-mdb-ripple-color="light"
                                    style="
                                        background: linear-gradient(
                                        to right,
                                        #ee7724,
                                        #d8363a,
                                        #dd3675,
                                        #b44593
                                        );
                                    "
                                    >
                                    Log in
                                    </button>
                                    <a class="text-gray-500" href="#!">Olvidé mi contraseña</a>
                                </div>
                                <div class="flex items-center justify-between pb-6">
                                    <p class="mb-0 mr-2">No tienes una cuenta?</p>
                                    <button
                                    type="button"
                                    class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                    data-mdb-ripple="true"
                                    data-mdb-ripple-color="light"
                                    >
                                    Registrarse
                                    </button>
                                </div>
                            </form>
                        </div>
                        </div>
                        <div
                        class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                        style="
                            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                        "
                        >
                        <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                            <h4 class="text-xl font-semibold mb-6">Somos más que una empresa</h4>
                            <p class="text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
    </div>
@endsection