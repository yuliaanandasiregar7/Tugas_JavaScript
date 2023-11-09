<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pengganti models di dalam conroller
use App\Models\Jenis_produk;

class JenisProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //sintakas menggunakan eloquent (ORM)
        $jenis_produk = Jenis_produk::all();
        return view('admin.jenis.index', compact('jenis_produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(('admin.jenis.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data eloquent
        $jenis_produk = new Jenis_produk;
        $jenis_produk->nama = $request->nama;
        $jenis_produk->save();
        return redirect('admin/jenis_produk');
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
        $jenis_produk = Jenis_produk::all()->where('id', $id);
        return view('admin.jenis.edit', compact('jenis_produk'));
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
        //coba pakai eloquent
        $jenis_produk = Jenis_produk::find($request->id);
        $jenis_produk->nama = $request->nama;
        $jenis_produk->save();
        return redirect('admin/jenis_produk');
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
