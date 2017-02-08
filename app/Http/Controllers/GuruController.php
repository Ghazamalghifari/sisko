<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $gurus = Guru::select('id','nip','nama_guru','jenis_kelamin','ttl','pendidikan','agama','status','alamat','tahun_lulus','jabatan');
            return Datatables::of($gurus)
                ->addColumn('action', function($guru){
                    return view('gurus._action', [
                        'model'    => $guru,
                        'form_url' => route('gurus.destroy', $guru->id),
                        'edit_url' => route('gurus.edit', $guru->id),
                        'show_url' => route('gurus.show', $guru->id),
                        'confirm_message' => 'Yakin Mau Mengapus Guru?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nip', 'name' => 'nip', 'title' => 'NIP'])
         ->addColumn(['data' => 'nama_guru', 'name' => 'nama_guru', 'title' => 'Nama Guru'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('gurus.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gurus.create');
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
            'nip'  => 'required|unique:gurus',
            'nama_guru'=>'required',
            'jenis_kelamin'  => 'required',
            'ttl'=>'required',
            'pendidikan'  => 'required',
            'agama'=>'required',
            'status'  => 'required',
            'jabatan'=>'required',
            'alamat'=>'required',
            'tahun_lulus'=>'required'
            ]);

        $guru = Guru::create($request->all());
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Guru"
            ]);
        return redirect()->route('gurus.index');
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
        $guru = Guru::select(['id','nip','nama_guru','jenis_kelamin','ttl','pendidikan','agama','status','alamat','tahun_lulus','jabatan'])->find($id);
        return view('gurus.show',['guru'=>$guru]);
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
        $guru = Guru::find($id);
        return view('gurus.edit')->with(compact('guru'));
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
        $guru = Guru::find($id);
        if(!$guru->update($request->all())) return redirect()->back();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah guru"
            ]);
        return redirect()->route('gurus.index');
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
        Guru::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Guru Berhasil Di Hapus"
            ]);
        return redirect()->route('gurus.index');
    }
}
