<?php

namespace App\Http\Controllers;
use validator;
use App\Models\Deposer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Images;

class AnnonceController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
		$data['pay_pays']=DB::table('pay_pays')->orderBy('pay_id','asc')->get();
        $data['tya_annonce']=DB::table('tya_annonce')->orderBy('tya_id_annonce','asc')->get();
        $data['tyl_typelogement']=DB::table('tyl_typelogement')->orderBy('tyl_id_typelogement','asc')->get();
        $data['tyb_typebien']=DB::table('tyb_typebien')->orderBy('tyb_id_bien','asc')->get();
        $data['ann_classGES']=DB::table('ann_annonce')->get();
		return view('annonce',$data);
	}

	public function getState(Request $request){
		$cid=$request->post('cid');
		$state=DB::table('reg_region')->where('pay_id',$cid)->orderBy('reg_id','asc')->get();
		$html='<option value="">Select State</option>';
		foreach($state as $list){
			$html.='<option value="'.$list->reg_id.'">'.$list->description.'</option>';
		}
		echo $html;
	}


    public function getDepartement(Request $request){
		$kid=$request->post('kid');
		$departement=DB::table('dep_departement')->where('reg_id',$kid)->orderBy('dep_id','asc')->get();
		$html='<option value="">Select Departement</option>';
		foreach($departement as $list){
			$html.='<option value="'.$list->dep_id.'">'.$list->description.'</option>';
		}
		echo $html;
	}

	public function getCity(Request $request){
		$sid=$request->post('sid');
		$city=DB::table('vill_ville')->where('dep_id',$sid)->orderBy('ville_id','asc')->get();
		$html='<option value="">Select ville</option>';
		foreach($city as $list){
			$html.='<option value="'.$list->ville_id.'">'.$list->description.'</option>';
		}
		echo $html;
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
            'tya_id_annonce'=>'required',
            'ann_titre'=>'required',
            'tyl_id_typelogement'=>'required',
            'tyb_id_bien'=>'required',
            'pay_id'=>'required',
            'reg_id'=>'required',
            'dep_id'=>'required',
            'ville_id'=>'required',
            'ann_fraisAgence'=>'required',
            'ann_address'=>'required',
            'ann_nbrdOccupant'=>'required',
            'ann_nombreChambre'=>'required',
            'ann_prix'=>'required',
            'ann_caution'=>'required',
            'ann_nombrePiece'=>'required',
            'ann_surface'=>'required',
            'ann_anneeConstruction'=>'required',
            'ann_meuble'=>'required',
            'ann_disponible'=>'required',
            'ann_classGES'=>'required',
            'ann_charge'=>'required',
            'ann_numEtage'=>'required',
            'ann_description'=>'required',
            'img_id_images'=>'required',
            'ann_ascenceur'=> 'required',
            'ann_FumeursAutorises'=>'required',
            'ann_AnimauxAutorises'=>'required',
            'ann_GarçonsUniquement'=>'required',
            'ann_fillesUuniquement'=>'required',
            'ann_accessibiliteHandicap'=>'required',
            'ann_classEnergie'=>'required',
            'img_id_images.*'=> 'mimes:png,jpeg,jpg'
        ]);
        if($request->hasfile('img_id_images')) {
            foreach($request->file('img_id_images') as $file) {
                $img_CheminImage = $file->getClientOriginalName();
                $file->storeAs('public/images', $img_CheminImage);
                $data[] = $img_CheminImage;
            }
            $file= new Images();
            $file->img_CheminImage= json_encode($data);
            $file->save();


        }



        /*

        - insert img in table image
        -recuperate last id image inserted
        -insert annonce table id recuperated for image table
        */

         $query=DB::table('ann_annonce')->insert([
             'tya_id_annonce'=>$request->input('tya_id_annonce'),
             'ann_titre'=>$request->input('ann_titre'),
             'tyl_id_typelogement'=>$request->input('tyl_id_typelogement'),
             'tyb_id_bien'=>$request->input('tyb_id_bien'),
             'pay_id'=>$request->input('pay_id'),
             'reg_id'=>$request->input('reg_id'),
             'dep_id'=>$request->input('dep_id'),
             'ville_id'=>$request->input('ville_id'),
             'ann_anneeConstruction'=>$request->input('ann_anneeConstruction'),
             'ann_address'=>$request->input('ann_address'),
             'ann_nbrdOccupant'=>$request->input('ann_nbrdOccupant'),
             'ann_nombreChambre'=>$request->input('ann_nombreChambre'),
             'ann_prix'=>$request->input('ann_prix'),
             'ann_caution'=>$request->input('ann_caution'),
             'ann_nombrePiece'=>$request->input('ann_nombrePiece'),
             'ann_surface'=>$request->input('ann_surface'),
             'ann_meuble'=>$request->input('ann_meuble'),
             'ann_disponible'=>$request->input('ann_disponible'),
             'ann_classGES'=>$request->input('ann_classGES'),
             'ann_charge'=>$request->input('ann_charge'),
             'ann_numEtage'=>$request->input('ann_numEtage'),
             'ann_description'=>$request->input('ann_description'),
             'img_id_images'=>$request->input('img_id_images'),

             'ann_FumeursAutorises'=>$request->input('ann_FumeursAutorises'),
             'ann_AnimauxAutorises'=>$request->input('ann_AnimauxAutorises'),
             'ann_GarçonsUniquement'=>$request->input('ann_GarçonsUniquement'),
             'ann_fillesUuniquement'=>$request->input('ann_fillesUuniquement'),
             'ann_ascenceur'=>$request->input('ann_ascenceur'),
             'ann_accessibiliteHandicap'=>$request->input('ann_accessibiliteHandicap'),
             'ann_classEnergie'=>$request->input('ann_classEnergie'),
             'ann_fraisAgence'=>$request->input('ann_fraisAgence'),

         ]);


         if($query){
            return redirect('/connected');
        }

        // $ann_annonce->save();
        // return redirect('/connected');

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
