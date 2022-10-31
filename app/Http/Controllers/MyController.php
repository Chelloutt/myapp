<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotions;
use App\Models\apprenants;
use Illuminate\support\Facades\DB;


class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function select(){
        $data = promotions::all();
        return view ('index', compact("data"));
    }

        public function add(){
        return view('add');
    }

    public function insert(Request $request){
        $addmodal = new promotions();
        $addmodal->name = $request->name;
        $addmodal->save(); 
        return redirect('index');

        
    }



    public function update($id){
        $apprenants = DB::table('apprenants')->join('promotions', 'promotions.id', '=', 'apprenants.promotionID')->select('apprenants.*')->where('promotionID', $id)->get();
        $edit = new promotions();    
        $promotion = $edit::where('id', $id )->get();
        return view('update', compact('promotion', 'apprenants'));
    }

        public function edit($id,Request $request){
        $editpromo = promotions::where('id',$id)->first();
        $editpromo->name = $request->name;
        $editpromo->save();
        return redirect('index');
    }


    public function search($name=null){ 

        if($name == null){
            $data =promotions::all();
            return view('search',compact('data'));}
        else {
            $data =promotions::where('name', 'like','%'.$name.'%')->get();
            return view('search',compact('data'));

        }

    }

        public function delete(Request $request){

        promotions::where('id',$request->id)->delete();
        return redirect('index');
    }







    // apprenants function


        public function addapp($id){
    return view('addapp',['id'=>$id]);

}

    public function insertapp(Request $request){
        $addapprenants = new apprenants();
        $addapprenants->first_name = $request->name;
        $addapprenants->last_name = $request->last;
        $addapprenants->email = $request->email;
        $addapprenants->promotionID = $request->idapp;
        $addapprenants->save(); 
        return redirect('index');
    }

        public function editapp($id){
        $edit = new apprenants();    
        $apprenant = $edit::where('id', $id )->get();
        return view('edit-app', compact('apprenant'));
    }
    


}

