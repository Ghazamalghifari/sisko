<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Pekerjaan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $karyawans = Karyawan::with(['pekerjaan']);
            return Datatables::of($karyawans)
                ->addColumn('action', function($karyawan){
                    return view('karyawans._action', [
                        'model'    => $karyawan,
                        'form_url' => route('karyawans.destroy', $karyawan->id),
                        'edit_url' => route('karyawans.edit', $karyawan->id),
                        'show_url' => route('karyawans.show', $karyawan->id),
                        'confirm_message' => 'Yakin Mau Mengapus Karyawan?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nik', 'name' => 'nik', 'title' => 'NIK'])
         ->addColumn(['data' => 'nama_karyawan', 'name' => 'nama_karyawan', 'title' => 'Nama'])
         ->addColumn(['data' => 'pekerjaan.nama_pekerjaan', 'name' => 'pekerjaan.nama_pekerjaan', 'title' => 'Pekerjaan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('karyawans.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nik'=>'required|unique:karyawans',
            'nama_karyawan'=>'required|max:225',
            'id_pekerjaan'  => 'required|exists:pekerjaans,id',
            'tugas'=>'required|max:225',
            'no_telp'=>'required|max:225',
            'alamat'=>'required|max:225',
            ]);

        $karyawan = Karyawan::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Karyawan"
            ]);
        return redirect()->route('karyawans.index');
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
        $karyawan = Karyawan::with('pekerjaan')->find($id);
        return view('karyawans.show',['karyawan'=>$karyawan]);
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
        $karyawan = Karyawan::find($id);
        return view('karyawans.edit')->with(compact('karyawan'));
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
        $karyawan = Karyawan::find($id);
        if(!$karyawan->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Karyawan"
            ]);
        return redirect()->route('karyawans.index');
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
        Karyawan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Karyawan Berhasil Di Hapus"
            ]);
        return redirect()->route('karyawans.index');
    }
}
