<?php

namespace App\Http\Controllers;
use validator;
use App\Models\Deposer;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Getcountrylist = Country::all();
        return view('country',compact('Getcountrylist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('annonce');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'typeAnnonce'=>'required',
            'categorie'=>'required',
            'adresse'=>'required',
            'nombrePersonne'=>'required',
            'prix'=>'required',
            'caution'=>'required',
            'charge'=>'required',
            'nombrePiece'=>'required',
            'surface'=>'required',
            'dateDispo'=>'required',
            'GES'=>'required',
            'etage'=>'required',
            'description'=>'required',
            'photo'=>'required',
        ]);
        $categorie=request('categorie');
        $typeAnnonce=request('typeAnnonce');
        $adresse=request('adresse');
        $nombrePersonne=request('nombrePersonne');
        $prix=request('prix');
        $caution=request('caution');
        $charge=request('charge');
        $piece=request('nombrePiece');
        $surface=request('surface');
        $dateDispo=request('dateDispo');
        $GES=request('GES');
        $etage=request('etage');
        $description=request('description');
        $photo=request('photo');

        $annonce=new Deposer();
        $annonce->name=$categorie;
        $annonce->name=$typeAnnonce;
        $annonce->name=$adresse;
        $annonce->name=$nombrePersonne;
        $annonce->name=$prix;
        $annonce->name=$caution;
        $annonce->name=$charge;
        $annonce->name=$piece;
        $annonce->name=$surface;
        $annonce->name=$dateDispo;
        $annonce->name=$GES;
        $annonce->name=$etage;
        $annonce->name=$description;
        $annonce->name=$photo;
        $annonce->save();
        return redirect()->route('connected')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
