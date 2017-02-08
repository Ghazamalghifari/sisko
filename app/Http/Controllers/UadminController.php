<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urole;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;

class UadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $uadmins = Urole::with(['user','role']);
            return Datatables::of($uadmins)
                ->addColumn('action', function($uadmin){
                    return view('uadmins._action', [
                        'model'    => $uadmin,
                        'form_url' => route('uadmins.destroy', $uadmin->id),
                        'edit_url' => route('uadmins.edit', $uadmin->id),
                        'show_url' => route('uadmins.show', $uadmin->id),
                        'confirm_message' => 'Yakin Mau Mengapus Siswa?'
                        ]);
                })->make(true);
        }

        $html = $htmlBuilder
         ->addColumn(['data' => 'user.name', 'name' => 'user.name', 'title' => 'User'])
         ->addColumn(['data' => 'role.display_name  ', 'name' => 'role.display_name   ', 'title' => 'Keterangan'])
         ->addColumn(['data' => 'action', 'name'=>'action','title'=>'', 'orderable'=>false, 'searchable'=>false]);

         return view('uadmins.index')->with(compact('html'));   
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
