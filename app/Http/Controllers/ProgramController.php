<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $programs = Program::get();
        return view('dashboard.programs.index', compact('programs'));
    }

    public function cetakProgram()
    {
        $programs = Program::get();
        return view('dashboard.programs.cetak', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.programs.create', compact('categories'));
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
            'proker' => 'required|max:225',
            'category_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
        ]);

        Program::create($validatedData);

        return redirect('dashboard/programs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        $categories = Category::get();
        return view('dashboard.programs.show', compact('categories'), [
            'program' => $program
        ]);
        // return $program;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $categories = Category::get();
        return view('dashboard.programs.edit', compact('categories'), [
            'program' => $program
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $validatedData = $request ->validate([
            'proker' => 'required|max:225',
            'category_id' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'tanggal' => 'required'
        ]);

        Program::where('id', $program->id)
                    ->update($validatedData);

        return redirect('dashboard/programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy($program->id);

        return redirect('dashboard/programs')->with('success', 'Data berhasil dihapus!');
    }
}