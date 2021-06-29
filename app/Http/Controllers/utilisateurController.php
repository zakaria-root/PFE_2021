<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use App\Http\Requests\utRequest;
use App\Models\Employee;
use App\Models\User;
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
        $etat = "utilisateurs";
        $utilisateurs = User::all();
        return view('utilisateurs.index' , ['users' => $utilisateurs ,'etat' => $etat]);

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
        
        // $emps = Employee::all();
        // foreach ($emps as $emp) {
        //     if ($emps->nomEmploye == $request->nom) {
        //         $role = "serveur";
        //     }
        // }
        if ($request->hasFile('image')) {
            $path = $request->image->store('image');
        }
         User::create([
            'name' => $request['nom'],
            'email' => $request['email'],
            'address' => $request['address'],
            'password' => Hash::make($request['motDePass']),
            'image' => $path,
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
        $user = User::findOrFail($request->value);
        if ($request->hasFile('image')) {
            $user->image = $request->image->store('image');
        }
        $user->name = $request->input('nom');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->password = Hash::make($request['motDePass']);
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
        $user = User::findOrFail($request->value);
        session()->flash('supprimer',' l\'utilisateur a ete bien supprimer !!');
        $user->delete();
        return back();
    }
}
