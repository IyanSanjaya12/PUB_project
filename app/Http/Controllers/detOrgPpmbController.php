<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class detOrgPpmbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detorgppmb=DB::table('tb_detorg_ppmb')
        ->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa','=','tb_detorg_ppmb.id_mahasiswa')
        ->join('tb_angkatan','tb_angkatan.id_angkatan','=','tb_detorg_ppmb.id_angkatan')
        ->join('tb_orgppmb','tb_orgppmb.id_orgppmb','=','tb_detorg_ppmb.id_orgppmb')
        ->join('tb_periode','tb_periode.id_periode','=','tb_detorg_ppmb.id_periode')
        ->get();
        return view('ppmb.struktur.det_lihat',compact('detorgppmb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=DB::table('tb_orgppmb')->get();
        $angkatan=DB::table('tb_angkatan')->where('angkatan','>=','16')->orderBy('angkatan')->get();
        $mahasiswa=DB::table('tb_mahasiswa')
        ->join('tb_statusPub','tb_mahasiswa.id_statusPub','=','tb_statusPub.id_statusPub')
        ->select('tb_mahasiswa.nama','tb_mahasiswa.id_mahasiswa','tb_statusPub.id_statusPub')
        ->where('tb_statusPub.status','PUB Aktif')
        ->orderBy('tb_mahasiswa.nama')
        ->get();
        $periode=DB::table('tb_periode')->get();
        return view('ppmb.struktur.det_tambah_struktur',compact('jabatan','angkatan','mahasiswa','periode'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=DB::table('tb_detorg_ppmb')
        ->where('id_mahasiswa',$request->mahasiswa)
        ->where('id_orgppmb',$request->jabatan)
        ->where('id_periode',$request->periode)
        ->count();
        if ($request->mahasiswa==0 || $request->angkatan==0 || $request->jabatan==0 || $request->periode==0) {
            return redirect('/det_struktur_ppmb/create')->with('alert','Mohon Mengisi semua Field !');
        }
        if($data>0){
            return redirect('/det_struktur_ppmb/create')->with('alert','Maaf, Data Tersebut Sudah Ada !');
        }else{
            DB::table('tb_detorg_ppmb')->insert([
                'id_mahasiswa' => $request->mahasiswa,
                'id_angkatan' => $request->angkatan,
                'id_orgppmb' => $request->jabatan,
                'id_periode' => $request->periode
            ]);

            return redirect('/det_struktur_ppmb');
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

        $jabatan=DB::table('tb_orgppmb')->get();
        $angkatan=DB::table('tb_angkatan')->orderby('angkatan')->get();
        $mahasiswa=DB::table('tb_mahasiswa')->get();
        $periode=DB::table('tb_periode')->get();

        $detorgppmb=DB::table('tb_detorg_ppmb')
        ->join('tb_mahasiswa','tb_mahasiswa.id_mahasiswa','=','tb_detorg_ppmb.id_mahasiswa')
        ->join('tb_angkatan','tb_angkatan.id_angkatan','=','tb_detorg_ppmb.id_angkatan')
        ->join('tb_orgppmb','tb_orgppmb.id_orgppmb','=','tb_detorg_ppmb.id_orgppmb')
        ->join('tb_periode','tb_periode.id_periode','=','tb_detorg_ppmb.id_periode')        
        ->where('id_detil',$id)
        ->get();

        return view('ppmb.struktur.det_edit_struktur',compact('jabatan','angkatan','mahasiswa','periode','detorgppmb'));
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

            DB::table('tb_detorg_ppmb')->where('id_detil',$request->id_pengurus)->update([
                'id_mahasiswa'=>$request->mhs,
                'id_angkatan'=>$request->ang,
                'id_orgppmb'=>$request->jab,
                'id_periode'=>$request->periode
            ]);
            return redirect('/det_struktur_ppmb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     DB::table('tb_detorg_ppmb')->where('id_detil',$id)->delete();
     return redirect('det_struktur_ppmb');
 }
}
