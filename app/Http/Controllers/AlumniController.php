<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $alumnis = Alumni::select(['id','angkatan','tahun_angkatan','jumlah_siswa','status'])->where('status' , 1    );
            return Datatables::of($alumnis)
                ->addColumn('action', function($alumni){
                    return view('datatable._data', [
                        'model'    => $alumni,
                        'form_url' => route('alumnis.destroy', $alumni->id),
                        'edit_url' => route('alumnis.edit', $alumni->id),
                        'show_url' => route('murids.show', $alumni->id),
                        'confirm_message' => 'Yakin Mau Mengapus Alumni ?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'angkatan', 'name' => 'angkatan', 'title' => 'Angkatan'])
         ->addColumn(['data' => 'tahun_angkatan', 'name' => 'tahun_angkatan', 'title' => 'Tahun Alumni'])
         ->addColumn(['data' => 'jumlah_siswa', 'name' => 'jumlah_siswa', 'title' => 'Jumlah Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('alumnis.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alumnis.create');
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
            'angkatan'=>'required|unique:alumnis',
            'tahun_angkatan'=>'required|max:225',
            'jumlah_siswa'=>'required|max:225',
            'status'=>'required'
            ]);

        $alumni = Alumni::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Alumni"
            ]);
        return redirect()->route('alumnis.index');
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
        $alumni = Alumni::find($id);
        return view('alumnis.edit')->with(compact('alumni'));
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
          $alumni = Alumni::find($id);
        if(!$alumni->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Alumni Angkatan $alumni->angkatan"
            ]);
        return redirect()->route('alumnis.index');
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
        Alumni::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Alumni Berhasil Di Hapus"
            ]);
        return redirect()->route('alumnis.index');
    }
}
