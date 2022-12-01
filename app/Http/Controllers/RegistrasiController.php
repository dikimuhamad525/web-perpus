<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index(){
        return view('registrasi_view');
    }

    public function simpan(Request $request){
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        try {
            User::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            return redirect('/')->with(['message' => 'Data berhasil disimpan, silahkan login kembali!']);
        } catch (\Throwable $th) {
            return back()->with(['message-error' => 'Data gagal disimpan']);
        }
    }
}
