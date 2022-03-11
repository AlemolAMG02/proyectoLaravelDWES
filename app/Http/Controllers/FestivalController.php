<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FestivalController extends Controller
{
    const RUTA_IMAGEN = 'storage/festivalPhotos/';
    const IMAGEN_ESTANDAR = 'festival1.jpg';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festivales = Festival::all();
        return view('festival.index')->with('festivales', $festivales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('festival.create');
    }

    /**
     * Muestra todos los festivales.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaFest()
    {
        $festivales = Festival::withTrashed()->get();
        return view('festival.listaFest')->with('festivales', $festivales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:festival',
            'estilo' => 'required',
            'descrip' => 'required',
            'capMax' => 'required',
            'precio' => 'required',
            'localidad' => 'required',
            'fecha' => 'required',
        ]);
        try {
            $newFest = new Festival(); // Creamos un objeto Festival.

            $newFest->nombre = $request->input('nombre');
            $newFest->estilo = $request->input('estilo');
            $newFest->descripcion = $request->input('descrip');
            $newFest->capMax = $request->input('capMax');
            $newFest->localidad = $request->input('localidad');
            $newFest->fecha = $request->input('fecha');
            $newFest->precio = $request->input('precio');
            //$newFest->user_id = Auth::id();

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                $newFest->imagen = self::RUTA_IMAGEN . $nombreFoto;
            } else
                $nombreFoto = self::RUTA_IMAGEN . self::IMAGEN_ESTANDAR;
            $newFest->save();    //Guardamos en la base de datos.

            $request->file('foto')->storeAs('public/festivalPhotos', $nombreFoto);
            return redirect()->route('listaFest');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaFest')->with('error', 1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fest = Festival::find($id);
        $artistas = DB::table('artista')->where('idFestival', $id)->get();
        return view('festival.show')->with('fest', $fest)->with('artistas', $artistas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fest = Festival::find($id);
        return view('festival.edit')->with('fest', $fest);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|unique:festival',
            'estilo' => 'required',
            'descrip' => 'required',
            'capMax' => 'required',
            'precio' => 'required',
            'localidad' => 'required',
            'fecha' => 'required',
        ]);
        try {
            $newFest = Festival::findOrFail($id);   // Creamos un objeto Festival.

            $newFest->nombre = $request->input('nombre');
            $newFest->estilo = $request->input('estilo');
            $newFest->descripcion = $request->input('descrip');
            $newFest->capMax = $request->input('capMax');
            $newFest->localidad = $request->input('localidad');
            $newFest->fecha = $request->input('fecha');
            $newFest->precio = $request->input('precio');

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                $newFest->imagen = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/festivalPhotos', $nombreFoto);
            }
            $newFest->save();    //Guardamos en la base de datos.

            return redirect()->route('listaFest');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaFest')->with('error', 1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fest = Festival::findOrFail($id);
        $fest->delete();
        return redirect()->route('listaFest')->with('error', 0);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activar($id)
    {
        $fest = Festival::findOrFail($id);
        $fest->restore();
        return redirect()->route('listaFest')->with('error', 0);
    }
}
