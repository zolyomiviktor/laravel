<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;



class PerfumeController extends Controller
{
    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "/perfumes", ["perfumes"=>$perfumes] );
    }

    public function newPerfume() {

        return view( "new_perfume" );
    }

    public function storePerfume( Request $request ) {

        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (int)$request->price;

        $perfume->save();
        
        return redirect( "/perfumes" );
    }

    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {
        $perfume = Perfume::find( $id );
        
        return view( "perfume", [
            "perfume" => $perfume
        ]);
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}
