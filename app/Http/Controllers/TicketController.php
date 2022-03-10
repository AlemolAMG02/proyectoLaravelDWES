<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = User::find(Auth::id());
        $listaTickets = Ticket::where('idUser', $userId->id)->get();
        $listaFest = array();
        foreach ($listaTickets as $t) {
            $listaFest[$t->idFestival] = Festival::findOrFail($t->idFestival);
        }
        //echo 'iduser = ' . $userId->id;
        //var_dump($listaTickets);
        //echo 'lista: ' . $listaTickets;
        return view('entrada.index')->with('tickets', $listaTickets)->with('festivales', $listaFest);
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
            $newTicket->save();    //Guardamos en la base de datos.

            return redirect()->route('listaUsers');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaUsers')->with('error', 1);
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


    public function comprarEntrada(Request $request, $idFest)
    {

        $fest = Festival::findOrFail($idFest);
        $user = User::find(Auth::id());

        for ($i = 1; $i <= $request->numTickets; $i++) {
            $newTicket = new Ticket();
            $newTicket->idFestival = $idFest;
            $newTicket->idUser = $user->id;
            $newTicket->save();    //Guardamos en la base de datos.
        }

        return redirect()->route('ticket.index');
        //return view(route('ticket.index'));

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
        $entrada = Ticket::findOrFail($id);
        $entrada->delete();
        return redirect()->route('listaTickets')->with('error', 0);
    }
}
