<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Okategori;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class OkategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $okategoris = Okategori::select(['id','nama_kategori']);
            return Datatables::of($okategoris)
                ->addColumn('action', function($okategori){
                    return view('datatable._action', [
                        'model'    => $okategori,
                        'form_url' => route('okategoris.destroy', $okategori->id),
                        'edit_url' => route('okategoris.edit', $okategori->id),
                        'confirm_message' => 'Yakin Mau Mengapus Kategori Obat ' . $okategori->nama_kategori . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_kategori', 'name' => 'nama_kategori', 'title' => 'Nama kategori'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('okategoris.index')->with(compact('html'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('okategoris.create');
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
            'nama_kategori'=>'required|unique:okategoris']);

        $okategori = Okategori::create($request->only('nama_kategori'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah kategori Obat $okategori->nama_kategori"
            ]);
        return redirect()->route('okategoris.index');
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
        $okategori = Okategori::find($id);
        return view('okategoris.edit')->with(compact('okategori'));
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
          $okategori = Okategori::find($id);
        if(!$okategori->update($request->all())) return redirect()->back();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Kategori Obat $okategori->nama_kategori"
            ]);
        return redirect()->route('okategoris.index');
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
        Okategori::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Kategori Obat Berhasil Di Hapus"
            ]);
        return redirect()->route('okategoris.index');
    }
}
