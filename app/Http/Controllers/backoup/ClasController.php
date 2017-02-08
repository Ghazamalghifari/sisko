<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clas;
use App\Kelas;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class ClasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $class = Clas::with(['kelas']);
            return Datatables::of($class)
                ->addColumn('action', function($clas){
                    return view('datatable._data', [
                        'model'    => $clas,
                        'form_url' => route('class.destroy', $clas->id),
                        'edit_url' => route('class.edit', $clas->id),
                        'show_url' => route('siswas.show', $clas->id),
                        'confirm_message' => 'Yakin Mau Mengapus Clas ?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'kelas.nama_kelas', 'name' => 'kelas.nama_kelas', 'title' => 'Kelas'])
         ->addColumn(['data' => 'nama_clas', 'name' => 'nama_clas', 'title' => 'Nama Kelas'])
         ->addColumn(['data' => 'jumlah_siswa', 'name' => 'jumlah_siswa', 'title' => 'Jumlah Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('class.index')->with(compact('html'));   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('class.create');
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
            'id_kelas'  => 'required|exists:kelas,id',
            'nama_clas'=>'required|max:225',
            'jumlah_siswa'=>'required|max:225'
            ]);

        $alumni = Clas::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Kelas"
            ]);
        return redirect()->route('class.index');
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
        $clas = Clas::with('kelas')->find($id);
        return view('class.show',['clas'=>$clas]);
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
        $clas = Clas::find($id);
        return view('class.edit')->with(compact('clas'));
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
          $clas = Clas::find($id);
        if(!$clas->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Kelas"
            ]);
        return redirect()->route('class.index');
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
        Clas::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Clas Berhasil Di Hapus"
            ]);
        return redirect()->route('class.index');
    }
}
