<?php

namespace App\Http\Controllers\Autenticacion;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    /**
     * Muestra el formulario de Login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('autenticacion.login');
    }

    /**
     * Cierra la sesión de un usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/login');
    }

    /**
     * Autentica un usuario.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){

        $messages = [
            'email.required'     => 'El correo es requerido.',
            'email.email'        => 'Indique un correo válido.',
            'password.required'  => 'La contraseña es requerida.',
        ];

        $validated = $request->validate([
            'email'     => 'required|max:255|email',
            'password' => 'required',
        ], $messages);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/peliculas');
        }else{
            return redirect('login')->with('errorMessageAutenticacion', 'Datos de autenticación inválido');
        }

    }

}
