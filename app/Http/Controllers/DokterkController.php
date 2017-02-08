<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;
use App\Siswa;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class DokterkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $dokter = Dokter::with(['siswa']);
            return Datatables::of($dokter)
                ->addColumn('action', function($dokter){
                    return view('datatable._action', [
                        'model'    => $dokter,
                        'form_url' => route('dokter.destroy', $dokter->id),
                        'edit_url' => route('dokter.edit', $dokter->id),
                        'show_url' => route('dokter.show', $dokter->id),
                        'confirm_message' => 'Yakin Mau Mengapus Dokter Kecil?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'NIDK'])
         ->addColumn(['data' => 'siswa.nama_siswa', 'name' => 'siswa.nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'bertugas', 'name' => 'bertugas', 'title' => 'Bertugas'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('dokter.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dokter.create');
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
            'id_siswa'  => 'required|unique:dokters|exists:siswas,id',
            'bertugas'=>'required'
            ]);

        $dokter = Dokter::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Dokter"
            ]);
        return redirect()->route('dokter.index');
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
        $dokter = Dokter::find($id);
        return view('dokter.edit')->with(compact('dokter'));
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
        $dokter = Dokter::find($id);
        if(!$dokter->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Dokter Kecil"
            ]);
        return redirect()->route('dokter.index');
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
        Dokter::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Dokter Kecil Berhasil Di Hapus"
            ]);
        return redirect()->route('dokter.index');
    }
}