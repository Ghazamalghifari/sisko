<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jekskul;
use App\Guru;
use App\Ekskul;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JadwaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jadwale = Jekskul::with(['guru','ekskul']); return Datatables::of($jadwale)
                ->addColumn('action', function($jekskul){ 
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'ekskul.nama_ekskul', 'name' => 'ekskul.nama_ekskul', 'title' => 'Nama Ekskul'])
         ->addColumn(['data' => 'mulai_ekskul', 'name' => 'mulai_ekskul', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_ekskul', 'name' => 'selesai_ekskul', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_ekskul', 'name' => 'hari_ekskul', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_ekskul', 'name' => 'keterangan_ekskul', 'title' => 'Keterangan']);

         return view('jadwale.index')->with(compact('html'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
