<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'admin')->get();
        return view('dashboard.anggotas.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.anggotas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|max:255'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'admin'
        ]);

        return redirect('dashboard/anggotas');
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.anggotas.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.anggotas.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        if($request->email){
            $request->validate([
                'email' => 'required|email|unique:users,email',
            ]);

            $validatedData['email'] = $request->email;
        }

        if($request->password){
            $request->validate([
                'password' => 'required|min:5|max:255'
            ]);

            $validatedData['password'] = bcrypt($request->password);
        }

        $user = User::where('id', $id)->first();
        if(!$user){
            return redirect()->back();
        }
        $user->update($validatedData);

        return redirect('dashboard/anggotas');
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        if (!$user) {
            return redirect()->back();
        }

        $user->delete($id);

        return redirect('dashboard/anggotas')->with('success', 'Data berhasil dihapus!');
    }
}
