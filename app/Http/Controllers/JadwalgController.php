<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jguru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JadwalgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if ($request->ajax()) {
            $jadwalg = Jguru::select(['id','nama_jadwal','mulai_guru','selesai_guru','hari_guru','keterangan_guru']);

            return Datatables::of($jadwalg)
                ->addColumn('action', function($jguru){
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_jadwal', 'name' => 'nama_jadwal', 'title' => 'Nama Jadwal'])
         ->addColumn(['data' => 'mulai_guru', 'name' => 'mulai_guru', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai_guru', 'name' => 'selesai_guru', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari_guru', 'name' => 'hari_guru', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan_guru', 'name' => 'keterangan_guru', 'title' => 'Keterangan']);

         return view('jadwalg.index')->with(compact('html'));   
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
