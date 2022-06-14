<?php

namespace App\Http\Controllers\Peliculas;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeliculaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Lista las peliculas.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $peliculas = Pelicula::get();

        return view("peliculas.lista")
            ->with("peliculas", $peliculas);
    }

    /**
     * Muestra una película.
     *
     * @return \Illuminate\View\View
     */
    protected function show($id = null)
    {

        $pelicula = [];

        if (isset($id) && !empty($id)) {
            $pelicula = Pelicula::find($id);
        }
        
        return view('peliculas.detalle', compact('pelicula'));
        
    }

    /**
     * Crea o Actualiza una película.
     *
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $request)
    {

        $validated = $request->validate(Pelicula::$rules, Pelicula::$messagesValidators);

        if ($request->filled('id_pelicula')) {

            $pelicula = Pelicula::find($request->id_pelicula);
            if($pelicula){
                $update = $pelicula->update($request->only([
                    'codigo',
                    'nombre',
                    'descripcion',
                    'genero',
                ]));
            }


        }else{

            $create = Pelicula::create([
                'codigo'           => $request->codigo,
                'nombre'           => $request->nombre,
                'descripcion'      => $request->descripcion,
                'genero'           => $request->genero
            ]);

        }

        return redirect('/peliculas');
        
    }

}
