<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kantin;
use App\Karyawan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class KantinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $kantins = Kantin::with(['karyawan']);
            return Datatables::of($kantins)
                ->addColumn('action', function($kantin){
                    return view('kantins._action', [
                        'model'    => $kantin,
                        'form_url' => route('kantins.destroy', $kantin->id),
                        'edit_url' => route('kantins.edit', $kantin->id),
                        'show_url' => route('cicilans.show', $kantin->id),
                        'confirm_message' => 'Yakin Mau Mengapus Kantin?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'karyawan.nama_karyawan', 'name' => 'karyawan.nama_karyawan', 'title' => 'Pekerjaan'])
         ->addColumn(['data' => 'bayaran_kantin', 'name' => 'bayaran_kantin', 'title' => 'Bayaran  Kantin'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('kantins.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kantins.create');
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
            'id_karyawan'  => 'required|exists:karyawans,id',
            'bayaran_kantin'=>'required|max:225',
            ]);

        $kantin = Kantin::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Kantin"
            ]);
        return redirect()->route('kantins.index');
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
        $kantin = Kantin::with('karyawan')->find($id);
        return view('kantins.show',['kantin'=>$kantin]);
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
        $kantin = Kantin::find($id);
        return view('kantins.edit')->with(compact('kantin'));
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
        $kantin = Kantin::find($id);
        if(!$kantin->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Kantin"
            ]);
        return redirect()->route('kantins.index');
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
        Kantin::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Kantin Berhasil Di Hapus"
            ]);
        return redirect()->route('kantins.index');
    }
}
