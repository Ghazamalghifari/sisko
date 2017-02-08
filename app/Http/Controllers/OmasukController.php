<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Omasuk;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class OmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $omasuks = Omasuk::with(['okategori','osatuan']);
            return Datatables::of($omasuks)
                ->addColumn('action', function($omasuk){
                    return view('datatable._action', [
                        'model'    => $omasuk,
                        'form_url' => route('omasuks.destroy', $omasuk->id),
                        'edit_url' => route('omasuks.edit', $omasuk->id),
                        'show_url' => route('omasuks.show', $omasuk->id),
                        'confirm_message' => 'Yakin Mau Mengapus Obat Masuk?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_obat', 'name' => 'nama_obat', 'title' => 'Nama Obat'])
         ->addColumn(['data' => 'okategori.nama_kategori', 'name' => 'okategori.nama_kategori', 'title' => 'Kategori'])
         ->addColumn(['data' => 'stok_obat', 'name' => 'stok_obat', 'title' => 'Stok'])
         ->addColumn(['data' => 'osatuan.nama_satuan', 'name' => 'osatuan.nama_satuan', 'title' => 'Satuan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('omasuks.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('omasuks.create');
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
            'nama_obat'=>'required|unique:omasuks',
            'id_okategori'  => 'required|exists:okategoris,id',
            'stok_obat'=>'required',
            'id_osatuan'  => 'required|exists:osatuans,id',
            ]);

        $omasuk = Omasuk::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Obat Masuk"
            ]);
        return redirect()->route('omasuks.index');
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
        $omasuk = Omasuk::find($id);
        return view('omasuks.edit')->with(compact('omasuk'));
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
        $omasuk = Omasuk::find($id);
        if(!$omasuk->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Obat Masuk"
            ]);
        return redirect()->route('omasuks.index');
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
        Omasuk::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Masuk Data Berhasil Di Hapus"
            ]);
        return redirect()->route('omasuks.index');
    }
}
