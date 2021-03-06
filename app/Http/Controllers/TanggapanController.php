<?php

namespace App\Http\Controllers;

use App\tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tanggapan = tanggapan::all();
        return View('admin/contact', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tanggapan = tanggapan::all();
        return View('hubungi', compact('tanggapan'));
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
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email:rfc,dns',
            'nomor_hp' => 'required|size:12',
            'comentar' => 'required'
        ]);

        tanggapan::create($request->all());
        return redirect('/hubungi')->with('status', 'Terimakasih atas tanggapan anda');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function show(tanggapan $tanggapan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function edit(tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tanggapan  $tanggapan
     * @return \Illuminate\Http\Response
     */
    public function destroy(tanggapan $tanggapan)
    {
        //
    }
}
