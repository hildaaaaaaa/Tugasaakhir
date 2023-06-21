<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Program;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = Laporan::get();
        return view('dashboard.laporans.index', compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::get();
        return view('dashboard.laporans.create', compact('programs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request ->validate([
            'proker_id' => 'required',
            'tanggal' => 'required',
            'laporan' => 'required'
        ]);

        Laporan::create($validatedData);

        return redirect('dashboard/laporans');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        $programs = Program::get();
        return view('dashboard.laporans.show', compact('programs'), [
            'laporan' => $laporan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        $programs = Program::get();
        return view('dashboard.laporans.edit', compact('programs'), [
            'laporan' => $laporan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $validatedData = $request ->validate([
            'proker_id' => 'required',
            'tanggal' => 'required',
            'laporan' => 'required'
        ]);

        Laporan::where('id', $laporan->id)
                    ->update($validatedData);

        return redirect('dashboard/laporans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);

        return redirect('dashboard/laporans')->with('success', 'Data berhasil dihapus!');
    }


    // public function printlaporans(){
    //     //ambil data dari table kelurahan
    //     $laporan = DB::table('laporans')
    //     ->join('proker_id','kecamatan.ID_KECAMATAN', '=','kelurahan.ID_KECAMATAN')
    //     ->where('kelurahan.DELETED_AT',null)->get();

    //     // mengirim data ke view kelurahan
    //     return view('dashboard.laporans', [
    //         'data' => $kelurahan
    //     ]);
    // }

}