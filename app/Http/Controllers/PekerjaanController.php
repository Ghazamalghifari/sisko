<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pekerjaan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class PekerjaanController extends Controller
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
            $pekerjaans = Pekerjaan::select(['id','nama_pekerjaan']);
            return Datatables::of($pekerjaans)
                ->addColumn('action', function($pekerjaan){
                    return view('datatable._action', [
                        'model'    => $pekerjaan,
                        'form_url' => route('pekerjaans.destroy', $pekerjaan->id),
                        'edit_url' => route('pekerjaans.edit', $pekerjaan->id),
                        'confirm_message' => 'Yakin Mau Mengapus Pekerjaan ' . $pekerjaan->nama_pekerjaan . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_pekerjaan', 'name' => 'nama_pekerjaan', 'title' => 'Nama Pekerjaan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('pekerjaans.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pekerjaans.create');
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
            'nama_pekerjaan'=>'required|max:225']);
        $pekerjaan = Pekerjaan::create($request->only('nama_pekerjaan'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Pekerjaan $pekerjaan->nama_pekerjaan"
            ]);
        return redirect()->route('pekerjaans.index');
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
        $pekerjaan = Pekerjaan::find($id);
        return view('pekerjaans.edit')->with(compact('pekerjaan'));
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
          $pekerjaan = Pekerjaan::find($id);
        if(!$pekerjaan->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Pekerjaan $pekerjaan->nama_pekerjaan"
            ]);
        return redirect()->route('pekerjaans.index');
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
        Pekerjaan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Pekerjaan Berhasil Di Hapus"
            ]);
        return redirect()->route('pelajarans.index');
    }
}
