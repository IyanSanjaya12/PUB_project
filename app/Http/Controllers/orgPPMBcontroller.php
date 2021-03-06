<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\orgPPMBmodel;
use Illuminate\Support\Facades\DB;   //ini wajib d Qbuilder

class orgPPMBcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgppmb=DB::table('tb_orgppmb')->orderby('id_orgppmb')->get();
        return view('ppmb.struktur.lihat',compact('orgppmb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('ppmb.struktur.tambah_struktur');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=DB::table('tb_orgppmb')
        ->where('jabatan',$request->jabatan)
        ->count();
        if ($request->jabatan=="") {
            return redirect('/struktur_ppmb/create')->with('alert','Mohon Mengisi semua Field !');
        }
        if($data>0){
            return redirect('/struktur_ppmb/create')->with('alert','Maaf, Data Tersebut Sudah Ada !');
        }else{

           DB::table('tb_orgppmb')->insert([
            'jabatan'=>$request->jabatan
        ]);

           return redirect('/struktur_ppmb');
       }
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
        $orgppmb= DB::table('tb_orgppmb')->where('id_orgppmb',$id)->get();
        return view('ppmb.struktur.edit_struktur',compact('orgppmb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        // $this->validate($request[
        //     'jabatan' => 'required'
// ]);

        DB::table('tb_orgppmb')->where('id_orgppmb',$request->id_jabatan)->update([
            'jabatan'=>$request->jabatan
        ]);
        return redirect('/struktur_ppmb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('tb_orgppmb')->where('id_orgppmb',$id)->delete();
       return redirect('struktur_ppmb');
   }
}
