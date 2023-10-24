<?php

namespace App\Http\Controllers\Departement;

use alert;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartementRequest;




class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement = Departement::paginate(2);
        return view('Admin.Departement.index',compact('departement'));
    }
    public function ajou()
    {
        return view('Admin.Departement.ajou');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartementRequest $request)
    {

        $departement = new Departement();
        $departement -> Designations =$request->nom;

        $departement->save();

        alert()->success('SuccessAlert','Le département est bien enregistre');

        return redirect()->route('departement.liste');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        return view ('Admin.Departement.edit', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartementRequest $request, Departement $departement)
    {
        Try{
            $departement->Designations = $request->nom;
            $departement->update();

            alert()->success('Félicitaion','Le département est bien Modifier');

            return redirect()->route('departement.liste');
           }
           catch(Exception $e) {
                   dd($e);
           }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        Try{
            $departement->delete();
            alert()->success('eh Voila !','Le département est Suprimmer');

            return redirect()->back();
           }
           catch(Exception $e) {
                   dd($e);
           }

    }
}
