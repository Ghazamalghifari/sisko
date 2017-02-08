<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Osatuan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class OsatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $osatuans = Osatuan::select(['id','nama_satuan']);
            return Datatables::of($osatuans)
                ->addColumn('action', function($osatuan){
                    return view('datatable._action', [
                        'model'    => $osatuan,
                        'form_url' => route('osatuans.destroy', $osatuan->id),
                        'edit_url' => route('osatuans.edit', $osatuan->id),
                        'confirm_message' => 'Yakin Mau Mengapus Kategori Obat ' . $osatuan->nama_satuan . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_satuan', 'name' => 'nama_satuan', 'title' => 'Nama Satuan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('osatuans.index')->with(compact('html'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('osatuans.create');
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
            'nama_satuan'=>'required|unique:osatuans']);

        $okategori = Osatuan::create($request->only('nama_satuan'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Satuan Obat $okategori->nama_satuan"
            ]);
        return redirect()->route('osatuans.index');
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
        $osatuan = Osatuan::find($id);
        return view('osatuans.edit')->with(compact('osatuan'));
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
          $osatuan = Osatuan::find($id);
        if(!$osatuan->update($request->all())) return redirect()->back();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Satuan Obat $osatuan->nama_kategori"
            ]);
        return redirect()->route('osatuans.index');
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
        Osatuan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Satuan Obat Berhasil Di Hapus"
            ]);
        return redirect()->route('osatuans.index');
    }
}
