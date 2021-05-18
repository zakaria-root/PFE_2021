<?php

namespace App\Http\Controllers;

use App\Http\Requests\utRequest;
use App\Models\Utilisateur;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class utilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('utilisateurs.index' , ['users' => $utilisateurs ]);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    

    public function store(utRequest $request)
    {
        
        
         Utilisateur::create([
            'login' => $request['nom'],
            'email' => $request['email'],
            'motDePass' => Hash::make($request['motDePass']),
        ]);
        session()->flash('ajouter',' l\'utilisateur a ete bien ajouter !!');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(utRequest $request)
    {
        $user = Utilisateur::findOrFail($request->value);
        $user->login = $request->input('nom');
        $user->email = $request->input('email');
        $user->motDePass = $request->input('motDePass');
        session()->flash('modifier',' l\'utilisateur a ete bien modifier !!');
        $user->save();
        return back();
        // $user = Utilisateur::findOrFail($request->value);
        // $user->update($request->all());
        // return back();
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = Utilisateur::findOrFail($request->value);
        session()->flash('supprimer',' l\'utilisateur a ete bien supprimer !!');
        $user->delete();
        return back();
    }
}
