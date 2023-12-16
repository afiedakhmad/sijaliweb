<?php

namespace App\Http\Controllers;

use App\Models\UserMobile;
use Illuminate\Http\Request;

class UserController extends Controller{
    
    public function konselor(){
    $users = UserMobile::all();
    return view('konselor.home-konselor',compact('users'));
    }

    public function formUser(){
        return view('konselor.laporan');
    }

    public function edit($id)
    {
        // dd($id);
        $user = UserMobile::find($id);

        return view('konselor.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kode' => 'required',
            // Sesuaikan dengan validasi yang diperlukan
        ]);

        // dd('iya');
        $user = UserMobile::find($id);
        // dd($user);
        $user->update($request->all());

        return redirect('/konselor')->with('success', 'Data berhasil diperbarui');
    }

    public function storeUser(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kode' => 'required',
        ]);

        // Simpan data ke dalam database menggunakan model
        UserMobile::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'kode' => $request->input('kode'),
        ]);

        // Tambahkan logika atau redirect ke halaman lain jika diperlukan
        return redirect('/konselor')->with('success', 'Data berhasil disimpan');
    }

    public function delete($id)
    {
        // dd($id);
        $user = UserMobile::find($id);

        // Pastikan data ditemukan sebelum menghapus
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'Data not found.');
        }

        // Hapus data
        $user->delete();

        return redirect('/konselor')->with('success', 'Data deleted successfully.');
    }
}