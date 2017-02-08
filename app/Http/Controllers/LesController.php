<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Les;
use App\Pelajaran;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class LesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $less = Les::with(['guru']);
            return Datatables::of($less)
                ->addColumn('action', function($les){
                    return view('datatable._see', [
                        'model'    => $les,
                        'form_url' => route('less.destroy', $les->id),
                        'edit_url' => route('less.edit', $les->id),
                        'show_url' => route('less.show', $les->id),
                        'confirm_message' => 'Yakin Mau Mengapus les Kantin?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Nama Pengajar'])
         ->addColumn(['data' => 'mata_pelajaran', 'name' => 'mata_pelajaran', 'title' => 'Mata Pelajaran'])
         ->addColumn(['data' => 'jumlah_siswa', 'name' => 'jumlah_siswa', 'title' => 'Jumlah Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('less.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('less.create');
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
            'id_guru'  => 'required|exists:gurus,id',
            'mata_pelajaran'=>'required',
            'jumlah_siswa'=>'required',
            ]);

        $les = Les::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Les"
            ]);
        return redirect()->route('less.index');
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
        $les = Les::find($id);
        return view('less.edit')->with(compact('les'));
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
        $les = Les::find($id);
        if(!$les->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Les"
            ]);
        return redirect()->route('less.index');
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
        Les::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Les Berhasil Di Hapus"
            ]);
        return redirect()->route('less.index');
    }
}
