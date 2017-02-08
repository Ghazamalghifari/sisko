<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jsekolah;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JsekolahController extends Controller
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
            $jsekolahs = Jsekolah::select(['id','nama_jadwal','mulai','selesai','hari','keterangan']);

            return Datatables::of($jsekolahs)
                ->addColumn('action', function($jsekolah){
                    return view('datatable._action', [
                        'model'    => $jsekolah,
                        'form_url' => route('jsekolahs.destroy', $jsekolah->id),
                        'edit_url' => route('jsekolahs.edit', $jsekolah->id),
                        'confirm_message' => 'Yakin Mau Mengapus Jadwal Sekolah?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_jadwal', 'name' => 'nama_jadwal', 'title' => 'Nama Jadwal'])
         ->addColumn(['data' => 'mulai', 'name' => 'mulai', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai', 'name' => 'selesai', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari', 'name' => 'hari', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan', 'name' => 'keterangan', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('jsekolahs.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jsekolahs.create');
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
            'nama_jadwal'  => 'required',
            'mulai'=>'required',
            'selesai'=>'required',
            'hari'=>'required',
            'keterangan'=>'required'
            ]);

        $jsekolah = Jsekolah::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menambah Jadwal Guru"
            ]);
        return redirect()->route('jsekolahs.index');
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
        $jsekolah = Jsekolah::find($id);
        return view('jsekolahs.edit')->with(compact('jsekolah'));
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
        $jsekolah = Jsekolah::find($id);
        if(!$jsekolah->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Jadwal Sekolah"
            ]);
        return redirect()->route('jsekolahs.index');
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
        Jsekolah::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Jadwal Sekolah Berhasil Di Hapus"
            ]);
        return redirect()->route('jsekolahs.index');
    }
}
