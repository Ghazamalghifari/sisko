<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jguru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            $jgurus = Jguru::select(['id','nama_jadwal','mulai_guru','selesai_guru','hari_guru','keterangan_guru']);

            return Datatables::of($jgurus)
                ->addColumn('action', function($jguru){
                    return view('datatable._action', [
                        'model'    => $jguru,
                        'form_url' => route('jgurus.destroy', $jguru->id),
                        'edit_url' => route('jgurus.edit', $jguru->id),
                        'confirm_message' => 'Yakin Mau Mengapus Jadwal Guru?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_jadwal', 'name' => 'nama_jadwal', 'title' => 'Nama Jadwal'])
         ->addColumn(['data' => 'mulai_guru', 'name' => 'mulai_guru', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_guru', 'name' => 'selesai_guru', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_guru', 'name' => 'hari_guru', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_guru', 'name' => 'keterangan_guru', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jgurus.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jgurus.create');
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
            'nama_jadwal'  => 'required',
            'mulai_guru'=>'required',
            'selesai_guru'=>'required',
            'hari_guru'=>'required',
            'keterangan_guru'=>'required'
            ]);

        $jguru = Jguru::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Jadwal Guru"
            ]);
        return redirect()->route('jgurus.index');
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
        $jguru = Jguru::find($id);
        return view('jgurus.edit')->with(compact('jguru'));
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
        $jguru = Jguru::find($id);
        if(!$jguru->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jadwal Guru"
            ]);
        return redirect()->route('jgurus.index');
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
        Jguru::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jadwal Guru Berhasil Di Hapus"
            ]);
        return redirect()->route('jgurus.index');
    }
}
