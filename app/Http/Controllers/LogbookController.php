<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logbook;

class LogbookController extends Controller
{
    public function index() {
        $logbooks = Logbook::where('user_id', auth()->user()->id)->get();
        return view('dashboard.logbook.index', compact('logbooks'));
    }
    
    public function create() {
        return view('dashboard.logbook.create');
    }

    public function store(Request $request) {
        Logbook::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        return redirect()->route('logbooks.index');
    }

    public function edit($id) {
        $logbook = Logbook::where('id', $id)->first();
        if($logbook->user_id != auth()->user()->id){
            return redirect()->back();
        }
        return view('dashboard.logbook.edit', compact('logbook'));
    }

    public function show($id) {
        $logbook = Logbook::where('id', $id)->first();
        if($logbook->user_id != auth()->user()->id){
            return redirect()->back();
        }
        return view('dashboard.logbook.show', compact('logbook'));
    }

    public function update($id, Request $request) {
        $logbook = Logbook::where('id', $id)->first();

        if($logbook->user_id != auth()->user()->id){
            return redirect()->back();
        }

        $logbook->update([
            'title' => $request->title,
            'desc' => $request->desc,
        ]);

        return redirect()->route('logbooks.index');
    }

    public function destroy($id) {
        $logbook = Logbook::where('id', $id)->first();
        if($logbook->user_id != auth()->user()->id){
            return redirect()->back();
        }
        $logbook->delete();

        return redirect()->route('logbooks.index');
    }
}
