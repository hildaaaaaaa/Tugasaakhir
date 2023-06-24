<?php

namespace App\Http\Controllers;

// use App\Models\Anggota;
use App\Models\Category;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProgramController extends Controller
{
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

    public function create()
    {
        $categories = Category::get();
        $users =  User::where('role', 'admin')->get();
        return view('dashboard.programs.create', compact('categories', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proker' => 'required|max:225',
            'category_id' => 'required|exists:users,id',
            'user_id' => 'required|exists:users,id',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        Program::create($validatedData);

        return redirect('dashboard/programs');
    }

    public function show(Program $program)
    {
        $categories = Category::get();
        return view('dashboard.programs.show', compact('categories'), [
            'program' => $program,
        ]);
    }

    public function edit(Program $program)
    {
        $categories = Category::get();
        $users = User::where('role', 'admin')->get();
        return view('dashboard.programs.edit', compact('categories', 'users'), [
            'program' => $program,
        ]);
    }

    public function update(Request $request, Program $program)
    {
        $validatedData = $request->validate([
            'proker' => 'required|max:225',
            'category_id' => 'required|exists:users,id',
            'user_id' => 'required|exists:users,id',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        Program::where('id', $program->id)
            ->update($validatedData);

        return redirect('dashboard/programs');
    }

    public function destroy(Program $program)
    {
        Program::destroy($program->id);

        return redirect('dashboard/programs')->with('success', 'Data berhasil dihapus!');
    }
}
