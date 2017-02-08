<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class KelasController extends Controller
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
            $kelass = Kelas::select(['id','kelas','nama_kelas','jumlah_siswa','status'])->where('status' , 1    );
            return Datatables::of($kelass)
                ->addColumn('action', function($kelas){
                    return view('datatable._data', [
                        'model'    => $kelas,
                        'form_url' => route('kelass.destroy', $kelas->id),
                        'edit_url' => route('kelass.edit', $kelas->id),
                        'show_url' => route('siswas.show', $kelas->id),
                        'confirm_message' => 'Yakin Mau Mengapus Kelas ' . $kelas->nama_kelas . '?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'kelas', 'name' => 'kelas', 'title' => 'Kelas'])
         ->addColumn(['data' => 'nama_kelas', 'name' => 'nama_kelas', 'title' => 'Nama Kelas'])
         ->addColumn(['data' => 'jumlah_siswa', 'name' => 'jumlah_siswa', 'title' => 'Jumlah Kelas'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('kelass.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelass.create');
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
            'kelas'=>'required',            
            'nama_kelas'=>'required|unique:kelas',
            'jumlah_siswa'=>'required',
            'status'=>'required']);
        $kelas = Kelas::create($request->only('kelas','nama_kelas','jumlah_siswa','status'));
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Kelas $kelas->nama_kelas"
            ]);
        return redirect()->route('kelass.index');
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
        $kelas = Kelas::find($id);
        return view('kelass.edit')->with(compact('kelas'));
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
          $kelas = Kelas::find($id);
        if(!$kelas->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Kelas $kelas->nama_kelas"
            ]);
        return redirect()->route('kelass.index');
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
        Kelas::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Kelas Berhasil Di Hapus"
            ]);
        return redirect()->route('kelass.index');
    }
}
