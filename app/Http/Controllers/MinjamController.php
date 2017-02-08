<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Minjam;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class MinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $minjams = Minjam::with(['siswa','buku']);
            return Datatables::of($minjams)
                ->addColumn('action', function($minjam){
                    return view('datatable._action', [
                        'model'    => $minjam,
                        'form_url' => route('minjams.destroy', $minjam->id),
                        'edit_url' => route('minjams.edit', $minjam->id),
                        'show_url' => route('minjams.show', $minjam->id),
                        'confirm_message' => 'Yakin Mau Mengapus Siswa?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'buku.kode', 'name' => 'buku.kode', 'title' => 'Kode Buku'])
         ->addColumn(['data' => 'siswa.nomor_induk', 'name' => 'siswa.nomor_induk', 'title' => 'NIS'])
         ->addColumn(['data' => 'siswa.nama_siswa', 'name' => 'siswa.nama_siswa', 'title' => 'Nama Siswa'])
         ->addColumn(['data' => 'buku.nama_buku', 'name' => 'buku.nama_buku', 'title' => 'Nama Buku']);

         return view('minjams.index')->with(compact('html'));   
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('minjams.create');
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
    }
}
