<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jsekolah;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class JadwalsController extends Controller
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
            $jadwals = Jsekolah::select(['id','nama_jadwal','mulai','selesai','hari','keterangan']);

            return Datatables::of($jadwals)
                ->addColumn('action', function($jsekolah){ 
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'nama_jadwal', 'name' => 'nama_jadwal', 'title' => 'Nama Jadwal'])
         ->addColumn(['data' => 'mulai', 'name' => 'mulai', 'title' => 'Mulai'])
         ->addColumn(['data' => 'selesai', 'name' => 'selesai', 'title' => 'Selesai'])
         ->addColumn(['data' => 'hari', 'name' => 'hari', 'title' => 'Hari'])
         ->addColumn(['data' => 'keterangan', 'name' => 'keterangan', 'title' => 'Keterangan']);

         return view('jadwals.index')->with(compact('html'));   
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
