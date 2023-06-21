<?php

namespace App\Http\Controllers;

use App\Models\Evaluasi;
use App\Models\Program;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluasis = Evaluasi::get();
        return view('dashboard.evaluasis.index', compact('evaluasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programs = Program::get();
        return view('dashboard.evaluasis.create', compact('programs'));
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
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        Evaluasi::create($validatedData);

        return redirect('dashboard/evaluasis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluasi $evaluasi)
    {
        $programs = Program::get();
        return view('dashboard.evaluasis.show', compact('programs'), [
            'evaluasi' => $evaluasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluasi $evaluasi)
    {
        $programs = Program::get();
        return view('dashboard.evaluasis.edit', compact('programs'), [
            'evaluasi' => $evaluasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluasi $evaluasi)
    {
        $validatedData = $request ->validate([
            'proker_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        Evaluasi::where('id', $evaluasi->id)
                    ->update($validatedData);

        return redirect('dashboard/evaluasis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evaluasi  $evaluasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluasi $evaluasi)
    {
        Evaluasi::destroy($evaluasi->id);

        return redirect('dashboard/evaluasis')->with('success', 'Data berhasil dihapus!');
    }
}