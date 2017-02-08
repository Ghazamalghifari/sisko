<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cicilan;
use App\Karyawan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Yajra\Datatables\Datatables\Eloquent;
use Illuminate\Support\Facades\DB;
use Session;


class CicilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
       return view('cicilans.create',['id_karyawan'=> $id ]);
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
        $this->validate($request,['tanggal_cicilan'=>'required','status_cicilan'=>'required','id_karyawan'  => 'required']);
     $cicilan = new  Cicilan();
     $cicilan->tanggal_cicilan = $request->tanggal_cicilan;
     $cicilan->status_cicilan = $request->status_cicilan;
     $cicilan->id_karyawan = $request->id_karyawan;
     $cicilan->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Pembayaran Kantin"
            ]);
        return redirect("/admin/cicilans/$request->id_karyawan");
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

            $cicilans = Cicilan::with(['Kantin'])->where('id_karyawan' , $id);
            return Datatables::of($cicilans)->addColumn('action', function($cicilan){
                    return view('datatable._action', [
                        'model'    => $cicilan,
                        'form_url' => route('cicilans.destroy', $cicilan->id),
                        'edit_url' => route('cicilans.edit', $cicilan->id),
                        'confirm_message' => 'Yakin Mau Mengapus Pembayaran Kantin?'
                        ]);
                })->make(true);
    }

    $karyawan = Karyawan::find($id);
$html = $htmlBuilder
         ->addColumn(['data' => 'tanggal_cicilan', 'name' => 'tanggal_cicilan', 'title' => 'Tanggal Pembayaran'])
         ->addColumn(['data' => 'status_cicilan', 'name' => 'status_cicilan', 'title' => 'Status Pembayaran'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);
return view('cicilans.index',['id_karyawan' => $id,'nama_karyawan' => $karyawan->nama_karyawan])->with(compact('html'));


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
        $cicilan = Cicilan::find($id);

         return view('cicilans.edit',['id_karyawan'=> $cicilan->id_karyawan,'cicilan' => $cicilan ]);
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
        $this->validate($request,['tanggal_cicilan'=>'required','status_cicilan'=>'required','id_karyawan'  => 'required']);


     $cicilan = Cicilan::find($id);
     $cicilan->tanggal_cicilan = $request->tanggal_cicilan;
     $cicilan->status_cicilan = $request->status_cicilan;
     $cicilan->id_karyawan = $request->id_karyawan;
     $cicilan->save();

        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Mengubah Pembayaran Kantin"
            ]);
        return redirect("/admin/cicilans/$request->id_karyawan");
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

        $cicilan = Cicilan::find($id);
        Cicilan::destroy($id);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Cicilan Berhasil Di Pembayaran Kantin"
            ]);
          return redirect()->back();
    }
}
