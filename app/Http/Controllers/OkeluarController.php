<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Okeluar;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class OkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $okeluars = Okeluar::with(['omasuk']);
            return Datatables::of($okeluars)
                ->addColumn('action', function($okeluar){
                    return view('datatable._action', [
                        'model'    => $okeluar,
                        'form_url' => route('okeluars.destroy', $okeluar->id),
                        'edit_url' => route('okeluars.edit', $okeluar->id),
                        'show_url' => route('okeluars.show', $okeluar->id),
                        'confirm_message' => 'Yakin Mau Mengapus Obat Keluar?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode Obat'])
         ->addColumn(['data' => 'omasuk.nama_obat', 'name' => 'omasuk.nama_obat', 'title' => 'Nama Obat'])
         ->addColumn(['data' => 'obat_keluar', 'name' => 'obat_keluar', 'title' => 'Obat Keluar'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('okeluars.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('okeluars.create');
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
            'id_omasuks'  => 'required|exists:omasuks,id',
            'obat_keluar'=>'required'
            ]);

        $okeluar = Okeluar::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Obat Keluar"
            ]);
        return redirect()->route('okeluars.index');
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
        $okeluar = Okeluar::find($id);
        return view('okeluars.edit')->with(compact('okeluar'));
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
        $okeluar = Okeluar::find($id);
        if(!$okeluar->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Obat Keluar"
            ]);
        return redirect()->route('okeluars.index');
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
        Okeluar::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Obat Keluar Data Berhasil Di Hapus"
            ]);
        return redirect()->route('okeluars.index');
    }
}
