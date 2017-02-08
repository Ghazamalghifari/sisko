<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class PelajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $pelajars = Siswa::with(['alumni','kelas']);
            return Datatables::of($pelajars)
                ->addColumn('action', function($nis){
                    return view('pelajars._action', [
                        'model'    => $nis,
                        'form_url' => route('pelajars.destroy', $nis->id),
                        'edit_url' => route('pelajars.edit', $nis->id),
                        'show_url' => route('pelajars.show', $nis->id),
                        'confirm_message' => 'Yakin Mau Mengapus Siswa?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nomor_induk', 'name' => 'nomor_induk', 'title' => 'NIS'])
         ->addColumn(['data' => 'nama_siswa', 'name' => 'nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('pelajars.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pelajars.create');
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
            'nama_siswa'  => 'required',
            'nomor_induk'=>'required|unique:siswas',
            'tanggal_lahir'  => 'required',
            'tempat_lahir'=>'required',
            'jenis_kelamin'  => 'required',
            'agama'=>'required',
            'pendidikan_sebelumnya'  => 'required',
            'alamat_siswa'=>'required',
            'nama_ayah'  => 'required',
            'nama_ibu'=>'required',
            'pekerjaan_ayah'  => 'required',
            'pekerjaan_ibu'=>'required',
            'alamat_ayah'  => 'required',
            'alamat_ibu'=>'required',
            'id_angkatan'=>'required',
            'id_kelas'=>'required'
            ]);

        $siswa = Siswa::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Siswa"
            ]);
        return redirect()->route('pelajars.index');
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
        $nis = Siswa::with('alumni')->find($id);
        return view('pelajars.show',['nis'=>$nis]);
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
        $siswa = Siswa::find($id);
        return view('pelajars.edit')->with(compact('siswa'));
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
        $siswa = Siswa::find($id);
        if(!$siswa->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Siswa"
            ]);
        return redirect()->route('pelajars.index');
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
        Siswa::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Siswa Berhasil Di Hapus"
            ]);
        return redirect()->route('pelajars.index');
    }
}
