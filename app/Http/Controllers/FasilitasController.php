<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fasilitas;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $fasilitass = Fasilitas::select(['id','nama_fasilitas','stok_fasilitas']);
            return Datatables::of($fasilitass)
                ->addColumn('action', function($fasilitas){
                    return view('datatable._action', [
                        'model'    => $fasilitas,
                        'form_url' => route('fasilitass.destroy', $fasilitas->id),
                        'edit_url' => route('fasilitass.edit', $fasilitas->id),
                        'confirm_message' => 'Yakin Mau Mengapus Fasilitas ' . $fasilitas->nama_fasilitas . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_fasilitas', 'name' => 'nama_fasilitas', 'title' => 'Nama Fasilitas'])
         ->addColumn(['data' => 'stok_fasilitas', 'name' => 'stok_fasilitas', 'title' => 'Stok Fasilitas'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('fasilitass.index')->with(compact('html'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('fasilitass.create');
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
            'nama_fasilitas'=>'required|unique:fasilitas',
            'stok_fasilitas'=>'required']);

        $fasilitas = Fasilitas::create($request->only('nama_fasilitas','stok_fasilitas'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Fasilitas $fasilitas->nama_fasilitas"
            ]);
        return redirect()->route('fasilitass.index');
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
        $fasilitas = Fasilitas::find($id);
        return view('fasilitass.edit')->with(compact('fasilitas'));
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
          $fasilitas = Fasilitas::find($id);
        if(!$fasilitas->update($request->all())) return redirect()->back();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Fasilitas $fasilitas->nama_fasilitas"
            ]);
        return redirect()->route('fasilitass.index');
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
        Fasilitas::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Fasilitas Berhasil Di Hapus"
            ]);
        return redirect()->route('fasilitass.index');
    }
}
