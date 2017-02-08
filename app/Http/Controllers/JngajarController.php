<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jngajar;
use App\Guru;
use App\Pelajaran;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JngajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jngajars = Jngajar::with(['guru','pelajaran']);
            return Datatables::of($jngajars)
                ->addColumn('action', function($jngajar){
                    return view('datatable._action', [
                        'model'    => $jngajar,
                        'form_url' => route('jngajars.destroy', $jngajar->id),
                        'edit_url' => route('jngajars.edit', $jngajar->id),
                        'show_url' => route('jngajars.show', $jngajar->id),
                        'confirm_message' => 'Yakin Mau Mengapus Jadwal Ngajar?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'pelajaran.nama_pelajaran', 'name' => 'pelajaran.nama_pelajaran', 'title' => 'Mata Pelajaran'])
         ->addColumn(['data' => 'mulai_ngajar', 'name' => 'mulai_ngajar', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_ngajar', 'name' => 'selesai_ngajar', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_ngajar', 'name' => 'hari_ngajar', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_ngajar', 'name' => 'keterangan_ngajar', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jngajars.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jngajars.create');
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
            'id_guru'  => 'required|exists:gurus,id',
            'id_pelajaran'  => 'required|exists:pelajarans,id',
            'mulai_ngajar'=>'required',
            'selesai_ngajar'=>'required',
            'hari_ngajar'=>'required',
            'keterangan_ngajar'=>'required'
            ]);

        $jngajar = Jngajar::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Jadwal Ngajar"
            ]);
        return redirect()->route('jngajars.index');
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
        $jngajar = Jngajar::find($id);
        return view('jngajars.edit')->with(compact('jngajar'));
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
        $jngajar = Jngajar::find($id);
        if(!$jngajar->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jadwal Ngajar"
            ]);
        return redirect()->route('jngajars.index');
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
        Jngajar::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jadwal Ngajar Berhasil Di Hapus"
            ]);
        return redirect()->route('jngajars.index');
    }
}
