<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajaran;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class PelajaranController extends Controller
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
            $pelajarans = Pelajaran::select(['id','nama_pelajaran']);

            return Datatables::of($pelajarans)
                ->addColumn('action', function($pelajaran){
                    return view('datatable._action', [
                        'model'    => $pelajaran,
                        'form_url' => route('pelajarans.destroy', $pelajaran->id),
                        'edit_url' => route('pelajarans.edit', $pelajaran->id),
                        'confirm_message' => 'Yakin Mau Mengapus Pelajaran ' . $pelajaran->nama_pelajaran . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_pelajaran', 'name' => 'nama_pelajaran', 'title' => 'Nama Pelajaran'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('pelajarans.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pelajarans.create');
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
            'nama_pelajaran'=>'required|unique:pelajarans']);
        $pelajaran = Pelajaran::create($request->only('nama_pelajaran'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Pelajaran $pelajaran->nama_pelajaran"
            ]);
        return redirect()->route('pelajarans.index');
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
        $pelajaran = Pelajaran::find($id);
        return view('pelajarans.edit')->with(compact('pelajaran'));
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
          $pelajaran = Pelajaran::find($id);
        if(!$pelajaran->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Pelajaran $pelajaran->nama_pelajaran"
            ]);
        return redirect()->route('pelajarans.index');
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
        Pelajaran::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Pelajaran Berhasil Di Hapus"
            ]);
        return redirect()->route('pelajarans.index');
    }
}
