<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Siswa;
use App\Alumni;

class MuridController extends Controller
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
       return view('murids.create',['id_angkatan'=> $id ]);
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
            'foto_siswa' => 'image|max:2048'
            ]);
$siswa = Siswa::create([
    'nama_siswa' => $request->nama_siswa,
    'nomor_induk' => $request->nomor_induk,
    'tanggal_lahir' => $request->tanggal_lahir,
    'tempat_lahir' => $request->tempat_lahir,
    'jenis_kelamin' => $request->jenis_kelamin,
    'agama' => $request->agama,
    'pendidikan_sebelumnya' => $request->pendidikan_sebelumnya,
    'alamat_siswa' => $request->alamat_siswa,
    'nama_ayah' => $request->nama_ayah,
    'nama_ibu' => $request->nama_ibu,
    'pekerjaan_ayah' => $request->pekerjaan_ayah,
    'pekerjaan_ibu' => $request->pekerjaan_ibu,
    'alamat_ayah' => $request->alamat_ayah,
    'alamat_ibu' => $request->alamat_ibu,
    'id_angkatan' => $request->id_angkatan,
    $request->except('foto_siswa')] );

if ($request->hasFile('foto_siswa')) {

            $uploaded_foto_siswa = $request->file('foto_siswa');

            $extension = $uploaded_foto_siswa->getClientOriginalExtension();

            $filename = md5(time()) . '.' . $extension;

            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'foto_siswa';
            $uploaded_foto_siswa->move($destinationPath, $filename);

            $siswa->foto_siswa = $filename;
            $siswa->save();
         }

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data Siswa"
            ]);
        return redirect("/admin/murids/$request->id_angkatan");
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

            $murids = Siswa::with(['alumni'])->where('id_angkatan' , $id);
            return Datatables::of($murids)->addColumn('action', function($murid){
                    return view('murids._action', [
                        'model'    => $murid,
                        'form_url' => route('murids.destroy', $murid->id),
                        'edit_url' => route('murids.edit', $murid->id),
                        'show_url' => route('murids.show', $murid->id),
                        'confirm_message' => 'Yakin Mau Mengapus Data Siswa?'
                        ]);
                })->make(true);
    }

    $angkatan = Alumni::find($id);
$html = $htmlBuilder
         ->addColumn(['data' => 'nomor_induk', 'name' => 'nomor_induk', 'title' => 'NIS'])
         ->addColumn(['data' => 'nama_siswa', 'name' => 'nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
    return view('murids.index',['id' => $id])->with(compact('html'));


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
        $murid = Siswa::find($id);

         return view('murids.edit',['id_angkatan'=> $murid->id_angkatan,'murid' => $murid ]);
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
            'id_angkatan'=>'required',
            'foto_siswa' => 'image|max:2048'
            ]);

     
          $siswa = Siswa::find($id);
          $siswa->update([
    'nama_siswa' => $request->nama_siswa,
    'nomor_induk' => $request->nomor_induk,
    'tanggal_lahir' => $request->tanggal_lahir,
    'tempat_lahir' => $request->tempat_lahir,
    'jenis_kelamin' => $request->jenis_kelamin,
    'agama' => $request->agama,
    'pendidikan_sebelumnya' => $request->pendidikan_sebelumnya,
    'alamat_siswa' => $request->alamat_siswa,
    'nama_ayah' => $request->nama_ayah,
    'nama_ibu' => $request->nama_ibu,
    'pekerjaan_ayah' => $request->pekerjaan_ayah,
    'pekerjaan_ibu' => $request->pekerjaan_ibu,
    'alamat_ayah' => $request->alamat_ayah,
    'alamat_ibu' => $request->alamat_ibu,
    'id_angkatan' => $request->id_angkatan,
    $request->except('foto_siswa')] );

          if ($request->hasFile('foto_siswa')) {
            $filename = null;
            $uploaded_foto_siswa = $request->file('foto_siswa');
            $extension = $uploaded_foto_siswa->getClientOriginalExtension();

            $filename = md5(time()) . '.' . $extension;

            $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'foto_siswa';
            $uploaded_foto_siswa->move($destinationPath, $filename);

            if ($siswa->foto_siswa){
                $old_foto_siswa = $siswa->foto_siswa;
                $filepath = public_path() . DIRECTORY_SEPARATOR . 'foto_siswa' . DIRECTORY_SEPARATOR . $siswa->foto_siswa;

                try {
                    File::delete($filepath);
                }   catch (FileNotFoundException $e) {
                    //File sudah di hapus/tidak ada
                }
            }


            $siswa->foto_siswa = $filename;
            $siswa->save();

          }
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Mengubah Data Siswa"
            ]);
        return redirect("/admin/murids/$request->id_angkatan");
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

        if ($siswa->foto_siswa) {
            $old_foto_siswa = $siswa->foto_siswa;
            $filepath = public_path() .DIRECTORY_SEPARATOR . 'foto_siswa' .DIRECTORY_SEPARATOR . $siswa->foto_siswa;

                try {
                    File::delete($filepath);
                }   catch (FileNotFoundException $e) {
                    //File sudah di hapus/tidak ada
                }
        }

        $siswa->delete();

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data Siswa Berhasil Di Hapus"
            ]);
          return redirect()->back();
    }


}
