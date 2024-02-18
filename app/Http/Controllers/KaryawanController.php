<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    function create() {
        return view('addkaryawan');
    }

    function create1(Request $request) {
        $request->validate([
            'Name' => ['required', 'min:5', 'max:20'],
            'Age' => ['required', 'numeric', 'min:20'],
            'Address' => ['required', 'min:10', 'max:40'],
            'Phone' => ['required', 'regex:/^08[0-9]{7,10}$/', 'min:9', 'max:12'],
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
    public function update($id, Request $request) {
        $request->validate([
            'Name' => ['required', 'min:5', 'max:20'],
            'Age' => ['required', 'numeric', 'min:20'],
            'Address' => ['required', 'min:10', 'max:40'],
            'Phone' => ['required', 'min:9', 'max:12'],
            'Photo' => ['required', 'image']
        ]);
        
        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Karyawan::find($id)->update([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'Phone' => $request->Phone,
            'Photo' => $filename
        ]);

        return redirect('/list');
    }

    public function delete($id) {
        $karyawan = Karyawan::find($id);
        Karyawan::destroy($id);
        Storage::delete('/public'.'/'.$karyawan->Photo);

        return redirect('/list');
    }
}
