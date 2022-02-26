<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    const RUTA_IMAGEN = 'storage/festivalPhotos/';

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
        $festivales = Festival::all();
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
        /*$validate = $request->validate([
            'matricula' => 'required|unique:cars',
            'marca' => 'required',
            'modelo' => 'required',
            'foto' => 'required|image',
        ]); */
        try {
            $newFest = new Festival(); // Creamos un objeto Festival.

            $newFest->nombre = $request->input('nombre');
            $newFest->estilo = $request->input('estilo');
            $newFest->descripcion = $request->input('descripcion');
            $newFest->capMax = $request->input('capMax');
            $newFest->localidad = $request->input('localidad');
            $newFest->fecha = $request->input('fecha');
            //$newFest->user_id = Auth::id();
            $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
            $newFest->foto = $nombreFoto;

            $newFest->save();    //Guardamos en la base de datos.

            $request->file('foto')->storeAs('public/festivalPhotos', $nombreFoto);
            return redirect()->route('admin');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('admin')->with('error', 1);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
