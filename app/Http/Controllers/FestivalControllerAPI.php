<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalControllerAPI extends Controller
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
        $allFestivals = Festival::all();
        return response()->json($allFestivals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            //return redirect()->route('listaFest');

        } catch (QueryException $exception) {
            echo $exception;
            //return redirect()->route('listaFest')->with('error', 1);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        } catch (QueryException $exception) {
            echo $exception;
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
    }
}
