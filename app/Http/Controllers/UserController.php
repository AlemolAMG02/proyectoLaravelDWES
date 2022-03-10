<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $roles = Role::all();
        return view('user.create')->with('roles', $roles);
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
            $newUser = new User(); // Creamos un objeto Festival.

            $newUser->nombre = $request->input('nombre');
            $newUser->apellidos = $request->input('ape');
            $newUser->email = $request->input('email');
            $newUser->direccion = $request->input('direccion');
            $newUser->password = Hash::make($request->input('pass'));
            $newUser->fechaNac = $request->input('fechaNac');
            $newUser->rol = $request->input('rol');

            $newUser->save();    //Guardamos en la base de datos.

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('user.edit')->with('user', $user)->with('roles', $roles);
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
            'nombre' => 'required|unique:users',
            'ape' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'pass' => 'required',
            'rol' => 'required'
        ]);
        try {
            $myUser = User::findOrFail($id);// Creamos un objeto Festival.

            $myUser->nombre = $request->input('nombre');
            $myUser->apellidos = $request->input('ape');
            $myUser->email = $request->input('email');
            $myUser->direccion = $request->input('direccion');
            if ($request->input('pass') !== null)
                $myUser->password = Hash::make($request->input('pass'));
            $myUser->fechaNac = $request->input('fechaNac');
            $myUser->rol = $request->input('rol');

            $myUser->save();    //Guardamos en la base de datos.

            return redirect()->route('listaUsers');

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaUsers')->with('error', 1);
        }
    }

    public function mostrarRol($idUser)
    {
        $rolUser = User::find($idUser);
        $miRol = Role::findOrFail($rolUser);
        return $miRol->name;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        //Session::flash('message', 'Usuario Eliminado');
        return redirect()->route('listaUsers')->with('error', 0);
    }

    /**
     * Muestra todos los festivales.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaUsers()
    {
        $users = User::withTrashed()->get();
        return view('user.listaUsers')->with('usuarios', $users);
    }
}
