<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jles;
use App\Les;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Auth;

class JadwallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $jadwall = Jles::with(['les','guru']);
            return Datatables::of($jadwall)
                ->addColumn('action', function($jles){ 
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'id', 'name' => 'id', 'title' => 'Kode'])
         ->addColumn(['data' => 'guru.nama_guru', 'name' => 'guru.nama_guru', 'title' => 'Guru Pengajar'])
         ->addColumn(['data' => 'les.mata_pelajaran', 'name' => 'les.mata_pelajaran', 'title' => 'Mata Pelajaran'])
         ->addColumn(['data' => 'mulai_les', 'name' => 'mulai_les', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_les', 'name' => 'selesai_les', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_les', 'name' => 'hari_les', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_les', 'name' => 'keterangan_les', 'title' => 'Keterangan']);

         return view('jadwall.index')->with(compact('html'));   
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
