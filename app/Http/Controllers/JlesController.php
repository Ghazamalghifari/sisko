<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jles;
use App\Les;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jless = Jles::with(['les','guru']);
            return Datatables::of($jless)
                ->addColumn('action', function($jles){
                    return view('datatable._action', [
                        'model'    => $jles,
                        'form_url' => route('jless.destroy', $jles->id),
                        'edit_url' => route('jless.edit', $jles->id),
                        'show_url' => route('jless.show', $jles->id),
                        'confirm_message' => 'Yakin Mau Mengapus Jadwal Les?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'les.mata_pelajaran', 'name' => 'les.mata_pelajaran', 'title' => 'Mata Pelajaran'])
         ->addColumn(['data' => 'mulai_les', 'name' => 'mulai_les', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_les', 'name' => 'selesai_les', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_les', 'name' => 'hari_les', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_les', 'name' => 'keterangan_les', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jless.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jless.create');
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
            'id_les'  => 'required|exists:les,id',
            'mulai_les'=>'required',
            'selesai_les'=>'required',
            'hari_les'=>'required',
            'keterangan_les'=>'required'
            ]);

        $jles = Jles::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Jadwal Les"
            ]);
        return redirect()->route('jless.index');
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
        $jles = Jles::find($id);
        return view('jless.edit')->with(compact('jles'));
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
        $jles = Jles::find($id);
        if(!$jles->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jadwal Les"
            ]);
        return redirect()->route('jless.index');
    }

    public function ajax1(Request $request)
    {
        if ($request-> ajax()) {
            # code...
            $id_les = $request->les;
            $les = Les::find($id_les);
            $les = Guru::find($les->id_guru);
            return $les->nama_guru;

        }
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
        Jles::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jadwal Les Berhasil Di Hapus"
            ]);
        return redirect()->route('jless.index');
    }
}
