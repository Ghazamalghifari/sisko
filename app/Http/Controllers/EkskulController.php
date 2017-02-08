<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ekskul;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class EkskulController extends Controller
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
            $ekskuls = Ekskul::select(['id','nama_ekskul']);
            return Datatables::of($ekskuls)
                ->addColumn('action', function($ekskul){
                    return view('datatable._action', [
                        'model'    => $ekskul,
                        'form_url' => route('ekskuls.destroy', $ekskul->id),
                        'edit_url' => route('ekskuls.edit', $ekskul->id),
                        'confirm_message' => 'Yakin Mau Mengapus Ekskul ' . $ekskul->nama_ekskul . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_ekskul', 'name' => 'nama_ekskul', 'title' => 'Nama Ekskul'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('ekskuls.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ekskuls.create');
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
            'nama_ekskul'=>'required|unique:ekskuls']);
        $ekskul = Ekskul::create($request->only('nama_ekskul'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Ekskul $ekskul->nama_ekskul"
            ]);
        return redirect()->route('ekskuls.index');
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
        $ekskul = Ekskul::find($id);
        return view('ekskuls.edit')->with(compact('ekskul'));
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
          $ekskul = Ekskul::find($id);
        if(!$ekskul->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Ekskul $ekskul->nama_ekskul"
            ]);
        return redirect()->route('ekskuls.index');
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
        Ekskul::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Ekskul Berhasil Di Hapus"
            ]);
        return redirect()->route('ekskuls.index');
    }
}
