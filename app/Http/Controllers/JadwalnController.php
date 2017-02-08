<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jngajar;
use App\Guru;
use App\Pelajaran;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JadwalnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jadwaln = Jngajar::with(['guru','pelajaran']);
            return Datatables::of($jadwaln)
                ->addColumn('action', function($jngajar){ 
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'pelajaran.nama_pelajaran', 'name' => 'pelajaran.nama_pelajaran', 'title' => 'Mata Pelajaran'])
         ->addColumn(['data' => 'mulai_ngajar', 'name' => 'mulai_ngajar', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_ngajar', 'name' => 'selesai_ngajar', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_ngajar', 'name' => 'hari_ngajar', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_ngajar', 'name' => 'keterangan_ngajar', 'title' => 'Keterangan']);

         return view('jadwaln.index')->with(compact('html'));   
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
