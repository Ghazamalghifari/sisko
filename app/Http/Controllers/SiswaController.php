<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Datatables\Eloquent;
use Illuminate\Support\Facades\DB;
use Session;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
       return view('siswas.create',['id_kelas'=> $id ]);
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
            'nomor_induk'=>'required',
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
            'id_kelas'=>'required'
            ]);

     $siswa = new  Siswa();
     $siswa->nama_siswa = $request->nama_siswa;
     $siswa->nomor_induk = $request->nomor_induk;
     $siswa->tanggal_lahir = $request->tanggal_lahir;
     $siswa->tempat_lahir = $request->tempat_lahir;
     $siswa->jenis_kelamin = $request->jenis_kelamin;
     $siswa->agama = $request->agama;
     $siswa->pendidikan_sebelumnya = $request->pendidikan_sebelumnya;
     $siswa->alamat_siswa = $request->alamat_siswa;
     $siswa->nama_ayah = $request->nama_ayah;
     $siswa->nama_ibu = $request->nama_ibu;
     $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
     $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
     $siswa->alamat_ayah = $request->alamat_ayah;
     $siswa->alamat_ibu = $request->alamat_ibu;
     $siswa->id_kelas = $request->id_kelas;
     $siswa->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data Siswa"
            ]);
        return redirect("/admin/siswas/$request->id_kelas");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Builder $htmlBuilder, $id)
    {
         if ($request->ajax()) {

            $siswas = Siswa::with(['kelas'])->where('id_kelas' , $id);
            return Datatables::of($siswas)->addColumn('action', function($siswa){
                    return view('datatable._action', [
                        'model'    => $siswa,
                        'form_url' => route('siswas.destroy', $siswa->id),
                        'edit_url' => route('siswas.edit', $siswa->id),
                        'confirm_message' => 'Yakin Mau Mengapus Pembayaran Kantin?'
                        ]);
                })->make(true);
    }

    $kelas = Kelas::find($id);
$html = $htmlBuilder
         ->addColumn(['data' => 'nomor_induk', 'name' => 'nomor_induk', 'title' => 'NIS'])
         ->addColumn(['data' => 'nama_siswa', 'name' => 'nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
return view('siswas.index',['id' => $id])->with(compact('html'));


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
        $id_kelas = $siswa->id_kelas;

         return view('siswas.edit',['id'=> $siswa->id,'siswa' => $siswa,'id_kelas' => $id_kelas]);
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
        $this->validate($request,[
            'nama_siswa'  => 'required',
            'nomor_induk'=>'required',
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
            'id_kelas'=>'required'
            ]);

     
     $siswa = Siswa::find($id);
     $siswa->nama_siswa = $request->nama_siswa;
     $siswa->nomor_induk = $request->nomor_induk;
     $siswa->tanggal_lahir = $request->tanggal_lahir;
     $siswa->tempat_lahir = $request->tempat_lahir;
     $siswa->jenis_kelamin = $request->jenis_kelamin;
     $siswa->agama = $request->agama;
     $siswa->pendidikan_sebelumnya = $request->pendidikan_sebelumnya;
     $siswa->alamat_siswa = $request->alamat_siswa;
     $siswa->nama_ayah = $request->nama_ayah;
     $siswa->nama_ibu = $request->nama_ibu;
     $siswa->pekerjaan_ayah = $request->pekerjaan_ayah;
     $siswa->pekerjaan_ibu = $request->pekerjaan_ibu;
     $siswa->alamat_ayah = $request->alamat_ayah;
     $siswa->alamat_ibu = $request->alamat_ibu;
     $siswa->id_kelas = $request->id_kelas;
     $siswa->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Mengubah Data Siswa"
            ]);
        return redirect("/admin/siswas/$request->id_kelas");
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
        $siswa = Siswa::find($id);
        Siswa::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Siswa Berhasil Di Hapus"
            ]);
          return redirect()->back();
    }
}
