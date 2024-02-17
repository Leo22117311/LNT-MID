<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    function create() {
        return view('addkaryawan');
    }

    function create1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Age' => ['required'],
            'Address' => ['required'],
            'Phone' => ['required'],
            'Photo' => ['required', 'image']
        ]);
        
        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);
        Karyawan::create([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'Phone' => $request->Phone,
            'Photo' => $filename
        ]);
        
        return redirect('/list');
    }
    public function view() {
        $karyawans = Karyawan::all();
        return view('list', compact('karyawans'));
    }
    public function edit($id) {
        $karyawan = Karyawan::findOrFail($id);
        return view('edit', compact('karyawan'));
    }
}
