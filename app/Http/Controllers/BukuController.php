<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class BukuController extends Controller
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
            $bukus = Buku::select(['id','kode','nama_buku','stok']);

            return Datatables::of($bukus)
                ->addColumn('action', function($buku){
                    return view('bukus._action', [
                        'model'    => $buku,
                        'form_url' => route('bukus.destroy', $buku->id),
                        'edit_url' => route('bukus.edit', $buku->id),
                        'show_url' => route('pinjams.show', $buku->id),
                        'confirm_message' => 'Yakin Mau Mengapus buku ' . $buku->nama_buku . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'kode', 'name' => 'kode', 'title' => 'Kode Buku'])
         ->addColumn(['data' => 'nama_buku', 'name' => 'nama_buku', 'title' => 'Nama Buku'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('bukus.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bukus.create');
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
            'kode'=>'required|unique:bukus',
            'nama_buku'=>'required|unique:bukus',
            'stok'=>'required']);

        $buku = Buku::create($request->only('kode','nama_buku','stok'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Buku $buku->nama_buku"
            ]);
        return redirect()->route('bukus.index');
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
        $buku = Buku::find($id);
        return view('bukus.edit')->with(compact('buku'));
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
          $buku = Buku::find($id);
        if(!$buku->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Buku $buku->nama_buku"
            ]);
        return redirect()->route('bukus.index');
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
        Buku::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Buku Berhasil Di Hapus"
            ]);
        return redirect()->route('bukus.index');
    }
}
