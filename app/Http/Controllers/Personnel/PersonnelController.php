<?php

namespace App\Http\Controllers\Personnel;


use alert;
use App\Models\Personnel;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonnelRequest;
use App\Http\Requests\MPersonnelRequest;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $personnel = Personnel::paginate(5);
        $departement =Departement::all();
        return view('Admin.Personnel.index', compact('personnel','departement'));
    }
    public function ajou()
    {
        $departement  = Departement::all();
        return view('Admin.Personnel.ajout',compact('departement'));
    }
    public function modif()
    {
        return view('Admin.Personnel.modif');
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
    public function store(PersonnelRequest $request)
    {


        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis').".".$image->getClientOriginalName();
        $image->move($destinationPath , $profileImage);
        $validateData['image']= $profileImage;

        $personnel =  new Personnel();
        $personnel->Matricule = $request->matricule;
        $personnel->nom= $request-> nom;
        $personnel->prenom= $request->prenom;
        $personnel->telephone= $request->telephone;
        $personnel->email= $request->email;
        $personnel->cin= $request->cin;
        $personnel->post= $request->poste;
        $personnel->date_Ambauche= $request->dateA;
        $personnel->departement_id= $request->select;
        $personnel->image = $profileImage;


        $personnel->save();

        alert()->success('Success','Le personnel est bien enregistre');

        return redirect()->route('Personnels.liste');

    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Personnel $personnel)
    {
        $departement = Departement::all();

        return view('Admin.Personnel.modif',compact('departement','personnel'));
    }


    public function modifie(MPersonnelRequest $request,Personnel $personnel)
    {
        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis').".".$image->getClientOriginalName();
        $image->move($destinationPath , $profileImage);
        $validateData['image']= $profileImage;

        $personnel =  new Personnel();
        $personnel->Matricule = $request->matricule;
        $personnel->nom= $request-> nom;
        $personnel->prenom= $request->prenom;
        $personnel->telephone= $request->telephone;
        $personnel->email= $request->email;
        $personnel->cin= $request->cin;
        $personnel->post= $request->poste;
        $personnel->date_Ambauche= $request->dateA;
        $personnel->departement_id= $request->select;
        $personnel->image = $profileImage;


        $personnel->update();

        alert()->success('Success','Le personnel est bien Modifier');

        return redirect()->route('Personnels.liste');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel )
    {
        Try{

            $personnel->delete();
            alert()->success('Success','Le personnel est suprime');

         return redirect()->back();
        }
        catch(Exception $e) {
                dd($e);
        }

    }

    public function recherche(){

        request() ->validate(
            [
                 'recherche'=>'required|min:2'
            ]);
        $recherche= request() -> input('recherche');

        $personnel = Personnel::where('nom', 'like', "%$recherche%")
                   ->orwhere('Matricule', 'Like' ,"%$recherche%" )
                   ->orwhere('poste', 'Like' ,"%$recherche%" )
                   ->paginate(6);

        return view('Admin.Personnel.recherche')->with('personnel', $personnel);
     }
}
