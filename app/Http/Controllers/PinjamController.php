<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minjam;
use App\Buku;
use App\Siswa;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Datatables\Eloquent;
use Illuminate\Support\Facades\DB;
use Session;

class PinjamController extends Controller
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
       return view('pinjams.create',['id_buku'=> $id ]);
    }



    public function ajax(Request $request)
    {
        if ($request-> ajax()) {
            # code...
            $id_siswa = $request->siswa;
            $siswa = Siswa::find($id_siswa);

            return $siswa->nama_siswa;

        }
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
        $this->validate($request,['id_siswa'=>'required','id_buku'=>'required','minjam'  => 'required']);
     $buku = new  Minjam();
     $buku->id_siswa = $request->id_siswa;
     $buku->id_buku = $request->id_buku;
     $buku->minjam = $request->minjam;
     $buku->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Pembayaran Kantin"
            ]);
        return redirect("/admin/pinjams/$request->id_buku");
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

            
            $pinjams = Minjam::with(['siswa','buku'])->where('id_buku' , $id);
            return Datatables::of($pinjams)->addColumn('action', function($pinjam){
                    return view('pinjams._action', [
                        'model'    => $pinjam,
                        'form_url' => route('pinjams.destroy', $pinjam->id),
                        'edit_url' => route('pinjams.edit', $pinjam->id),
                        'confirm_message' => 'Yakin Buku Sudah Di Kembalikan?'
                        ]);
                })->make(true);
    }

    $buku = Buku::find($id);
$html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode Pinjam'])
         ->addColumn(['data' => 'siswa.nomor_induk', 'name' => 'siswa.nomor_induk', 'title' => 'Nomor Induk'])
         ->addColumn(['data' => 'siswa.nama_siswa', 'name' => 'siswa.nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
return view('pinjams.index',['id' => $id,'nama_buku' => $buku->nama_buku,'stok' => $buku->stok])->with(compact('html'));


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
        $buku = Minjam::find($id);
        Minjam::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Buku Berhasil Di Kembalikan"
            ]);
          return redirect()->back();
    }
}
