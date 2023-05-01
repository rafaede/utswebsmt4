<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=siswa::orderBy('nomor_induk','asc')->paginate(5);
        return view('siswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nomor_induk', $request->nomor_induk);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'nomor_induk'=>'required|numeric',
            'nama'=>'required',
            'alamat'=>'required',
        ],[
            'nomor_induk.required'=>'Nomor induk WAJIB diisi',
            'nomor_induk.numeric'=>'Nomor induk WAJIB diisi dalam angka',
            'nama.required'=>'Nama WAJIB diisi',
            'alamat.required'=>'Alamat WAJIB diisi',
        ]);
        $data=[
            'nomor_induk'=>$request->input('nomor_induk'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
        ];
        siswa::create($data);
        return redirect('siswa')->with('success','Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=siswa::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=siswa::where('nomor_induk',$id)->first();
        
        return view('siswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'alamat'=>'required',
        ],[
            'nomor_induk.required'=>'Nomor induk WAJIB diisi',
            'nomor_induk.numeric'=>'Nomor induk WAJIB diisi dalam angka',
            'nama.required'=>'Nama WAJIB diisi',
            'alamat.required'=>'Alamat WAJIB diisi',
        ]);
        $data=[
            'nomor_induk'=>$request->input('nomor_induk'),
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
        ];
        $data=[
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
        ];
        siswa::where('nomor_induk',$id)->update($data);
        return redirect('/siswa')->with('success','Berhasil melakukan update data');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        siswa::where('nomor_induk', $id)->delete();
        return redirect('/siswa')->with('success', 'Berhasil memasukan data');
    }
}
