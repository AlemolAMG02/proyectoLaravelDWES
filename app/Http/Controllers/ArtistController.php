<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Festival;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    const RUTA_IMAGEN = 'storage/artistsPhotos/';
    const IMAGEN_ESTANDAR = 'festival1.jpg';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Artist::all();
        return view('artista.index')->with('artistas', $lista);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $festivales = Festival::all();
        return view('artista.create')->with('festivales', $festivales);
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
            $newArtist = new Artist(); // Creamos un nuevo Artista.

            $newArtist->nombre = $request->input('nombre');
            $newArtist->estilo = $request->input('estilo');
            $newArtist->descripcion = $request->input('descrip');
            if ($request->input('isGroup') != null)
                $newArtist->esGrupo = 1;
            else
                $newArtist->esGrupo = 0;
            $newArtist->anio = $request->input('anio');
            if ($request->input('fest') != 0)
                $newArtist->idFestival = $request->input('fest');
            else
                $newArtist->idFestival = NULL;

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                $newArtist->foto = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/festivalPhotos', $nombreFoto);
            } else
                $nombreFoto = "";
            $newArtist->save();    //Guardamos en la base de datos.

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
