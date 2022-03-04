<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            $newTicket = new Ticket(); // Creamos un objeto Festival.

            $newTicket->precio = $request->input('precio');
            $newTicket->apellidos = $request->input('ape');
            $newTicket->email = $request->input('email');
            $newTicket->direccion = $request->input('direccion');
            $newTicket->password = Hash::make($request->input('pass'));
            $newTicket->fechaNac = $request->input('fechaNac');
            $newTicket->rol = $request->input('rol');

            $newTicket->save();    //Guardamos en la base de datos.

            return redirect()->route('listaUsers');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaUsers')->with('error', 1);
        }
    }

    public function storeWithData(Ticket $newTicket)
    {
        try {
            $newTicket->save();    //Guardamos en la base de datos.

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


    public function createManyFromFestival($idFest, $precio)
    {
        $fest = Festival::findOrFail($idFest);
        $maxEntradas = $fest->capMax;
        //$ticketList = array();

        for ($i = 0; $i < $maxEntradas; $i++) {
            $newTicket = new Ticket();
            $newTicket->precio = $precio;
            $newTicket->descripcion = "Entrada para el festival " . $fest->nombre;
            $newTicket->fecha = $fest->fecha;
            $newTicket->idFestival = $idFest;
            //$ticketList[] = $newTicket;

            $this->storeWithData($newTicket);
        }

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
