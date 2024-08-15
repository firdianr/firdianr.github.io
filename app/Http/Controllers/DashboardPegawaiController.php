<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pegawais.index', [
            'title' => 'Kelola Informasi Jabatan',
            'pegawais' => Pegawai::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pegawais.create', [
            'title' => 'Tambah Jabatan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'slug' => 'required|unique:pegawais',
            'image' => 'image|file',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('pegawai-image');
        }
    
        Pegawai::create($validatedData);
    
        return redirect('/dashboard/pegawais')->with('success', 'Jabatan Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('dashboard.pegawais.edit',[
            'title' => 'Kelola Informasi Pegawai',
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'image|file',
        ];

        // dd($request);

        if($request->slug != $pegawai->slug){
            $rules['slug'] = 'required|unique:pegawais';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('pegawai-image');
        }

        // dd($validatedData);
    
        Pegawai::where('id', $pegawai->id)->update($validatedData);
    
        return redirect('/dashboard/pegawais')->with('success', 'Informasi jabatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        if($pegawai->image){
            Storage::delete($pegawai->image);
        }

        Pegawai::destroy($pegawai->id);

        return redirect('/dashboard/pegawais')->with('success', 'Informasi Pegawai Telah Dihapus!');
    }
}
