<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::all();
        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
    public function tambah_mahasiswa()
    {
        return view ('formpendaftaran');
    }
    
    public function simpan_mahasiswa(Request $request)
    {   
       
        $request->validate([
            'nama' => ['required'],
            'tempat_lahir' => ['required'],
            'tanggal_lahir' => ['required', 'date'],
            'jenis_kelamin' => ['required'],
            'email' => ['required', 'email'],
            'nomor_telpon' => ['required'],
            'alamat' => ['required'],
            'kode_pos' => ['required'],
            
        ]);
        
        mahasiswa::create([
            'nama' =>$request->nama,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'no_telpon' =>$request->nomor_telpon,
            'tempat_lahir' =>$request->tempat_lahir,
            'jenis_kelamin' =>$request->jenis_kelamin,
            'email' =>$request->email,
            'kode_pos' =>$request->kode_pos,
            'nim' => '-'
        ]);
        
        return redirect('mahasiswa');
    }
    public function edit_mahasiswa($id)
    {
        
        $data = mahasiswa::find($id);
        return view('formupdatemahasiswa',[
            'mahasiswa' => $data,
        ]);
    }
    public function update_mahasiswa($id,Request $request)
    {
        
        mahasiswa::find($id)->update([
            'nama' =>$request->nama,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'no_telpon' =>$request->nomor_telpon,
            'tempat_lahir' =>$request->tempat_lahir,
            'jenis_kelamin' =>$request->jenis_kelamin,
            'email' =>$request->email,
            'kode_pos' =>$request->kode_pos,
            'nim' =>$request->nim,
        ]);
        return redirect('mahasiswa');
    }
}