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
        $request->validate([
            'nombre' => 'required|unique:artista',
            'estilo' => 'required',
            'descrip' => 'required',
            'fest' => 'required',
            'anio' => 'required',
        ]);
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
                $request->file('foto')->storeAs('public/artistsPhotos', $nombreFoto);
            } else {
                $nombreFoto = "";
                $newArtist->foto = $nombreFoto;
            }
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
        $artist = Artist::find($id);
        // $fest = DB::table('festival')->where('id', $artist->idFestival)->get('nombre');
        $fest = Festival::find($artist->idFestival);
        return view('artista.show')->with('artist', $artist)->with('fest', $fest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        $festivales = Festival::all();
        return view('artista.edit')->with('artist', $artist)->with('festivales', $festivales);
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
            'nombre' => 'required|unique:artista',
            'estilo' => 'required',
            'descrip' => 'required',
            'fest' => 'required',
            'anio' => 'required',
        ]);
        try {
            $newArtist = Artist::findOrFail($id);   // Creamos un objeto Festival.

            $newArtist->nombre = $request->input('nombre');
            $newArtist->estilo = $request->input('estilo');
            $newArtist->descripcion = $request->input('descrip');
            $newArtist->anio = $request->input('anio');
            if ($request->input('fest') != 0)
                $newArtist->idFestival = $request->input('fest');
            else
                $newArtist->idFestival = NULL;

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                $newArtist->foto = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/artistsPhotos', $nombreFoto);
            }
            $newArtist->save();    //Guardamos en la base de datos.

            return redirect()->route('listaArtist');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaArtist')->with('error', 1);
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
        $fest = Artist::findOrFail($id);
        $fest->delete();
        return redirect()->route('listaArtist')->with('error', 0);
    }

    public function listaArtist()
    {
        $artistas = Artist::withTrashed()->get();
        return view('artista.listaArtist')->with('artistas', $artistas);
    }

    public function activar($id)
    {
        $fest = Artist::withTrashed()->where('id', $id)->restore();
        return redirect()->route('listaArtist');
    }

}
