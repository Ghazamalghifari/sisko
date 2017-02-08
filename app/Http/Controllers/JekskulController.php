<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jekskul;
use App\Guru;
use App\Ekskul;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JekskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jekskuls = Jekskul::with(['guru','ekskul']); return Datatables::of($jekskuls)
                ->addColumn('action', function($jekskul){
                    return view('datatable._action', [
                        'model'    => $jekskul,
                        'form_url' => route('jekskuls.destroy', $jekskul->id),
                        'edit_url' => route('jekskuls.edit', $jekskul->id),
                        'show_url' => route('jekskuls.show', $jekskul->id),
                        'confirm_message' => 'Yakin Mau Mengapus Jadwal Ekskul?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'ekskul.nama_ekskul', 'name' => 'ekskul.nama_ekskul', 'title' => 'Nama Ekskul'])
         ->addColumn(['data' => 'mulai_ekskul', 'name' => 'mulai_ekskul', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_ekskul', 'name' => 'selesai_ekskul', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_ekskul', 'name' => 'hari_ekskul', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_ekskul', 'name' => 'keterangan_ekskul', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jekskuls.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jekskuls.create');
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
            'id_ekskul'  => 'required|exists:ekskuls,id',
            'mulai_ekskul'=>'required',
            'selesai_ekskul'=>'required',
            'hari_ekskul'=>'required',
            'keterangan_ekskul'=>'required'
            ]);

        $jekskul = Jekskul::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Jadwal Ekskul"
            ]);
        return redirect()->route('jekskuls.index');
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
        $jekskul = Jekskul::find($id);
        return view('jekskuls.edit')->with(compact('jekskul'));
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
        $jekskul = Jekskul::find($id);
        if(!$jekskul->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jadwal Ekskul"
            ]);
        return redirect()->route('jekskuls.index');
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
        Jekskul::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jadwal Ekskul Berhasil Di Hapus"
            ]);
        return redirect()->route('jekskuls.index');
    }
}
