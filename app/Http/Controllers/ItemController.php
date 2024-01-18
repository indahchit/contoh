<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=item::all();
        return view('item.index' , compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postData = ['kodebarang' => $request->kodebarang,
        'namabarang' => $request->namabarang,
        'kategori' => $request->kategori,
        'stok' => $request->stok,
        'harga' => $request->harga,];
        item::create($postData);
        return redirect('/item')->with('sukses','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        return view('item.update', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = item ::where('id', $id)->first();
        $postData = ['kodebarang' => $request->kodebarang,
        'namabarang' => $request->namabarang,
        'kategori' => $request->kategori,
        'stok' => $request->stok,
        'harga' => $request->harga,];
        $item->update($postData);
        return redirect('/item')->with('sukses','Data Berhasil Diperbaruhi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        item::destroy($item->id);
        return Redirect('/item')->with('sukses','Data Berhasil Dihapus');
    }
}
