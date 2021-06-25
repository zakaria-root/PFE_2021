<?php

namespace App\Http\Controllers;

use App\Http\Requests\emRequest;
use App\Http\Requests\utRequest;
use App\Models\CafeRestaurant;
use App\Models\Employee;
use App\Models\User;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
        $eplouyee = Employee::all();
        $cafes = CafeRestaurant::all();
        $etat = "employees";
        return view('employees.index' , ['emps' => $eplouyee ,'cafes' => $cafes, 'etat' => $etat]);

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
    public function store(emRequest $request)
    {
        
        $emp = Employee::create([
            'nomEmploye' => $request['nomEmploye'],
            'prenomEmploye' => $request['prenomEmploye'],
            'adressEmploye' => $request['adressEmploye'],
            'fonction' => $request['fonction'],
            'salaire' => $request['salaire'],
            'commission' => $request['commission'],
            'cafe_restaurants_id' => $request['cafe'],
            
            
        ]);
        if ($request->fonction == "serveur") {
            $name = $request->nomEmploye . $request->prenomEmploye;
            User::create([
                'name' => $name,
                'email' => $name . "@gmail.com",
                'address' => $request->adressEmploye,
                'password' => Hash::make("z1i2a3s4"),
                'role' => "serveur",
            ]);
        
        }
            session()->flash('ajouter',' l\'employe a ete bien ajouter !!');
            $emp->save();
            return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(emRequest $request)
    {

        

        $emp = Employee::findOrFail($request->value);
        $emp->nomEmploye = $request->input('nomEmploye');
        $emp->prenomEmploye = $request->input('prenomEmploye');
        $emp->adressEmploye = $request->input('adressEmploye');
        $emp->fonction = $request->input('fonction');
        $emp->salaire = $request->input('salaire');
        $emp->commission = $request->input('commission');
        
        session()->flash('modifier',' l\'employe a ete bien modifier !!');
        $emp->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {

        $emp = Employee::findOrFail($request->value);
        session()->flash('supprimer',' l\'employe a ete bien supprimer !!');
        $emp->delete();
        return back();
    }
}
