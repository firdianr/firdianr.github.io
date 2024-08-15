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

        if ($request->file('image')) {
            // Simpan gambar di folder public/pegawai-image
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('pegawai-image'), $imageName);
            $validatedData['image'] = 'pegawai-image/' . $imageName;
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

        if ($request->slug != $pegawai->slug) {
            $rules['slug'] = 'required|unique:pegawais';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($pegawai->image) {
                // Hapus gambar lama dari folder public
                $oldImagePath = public_path($pegawai->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Simpan gambar baru di folder public/pegawai-image
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('pegawai-image'), $imageName);
            $validatedData['image'] = 'pegawai-image/' . $imageName;
        }

        Pegawai::where('id', $pegawai->id)->update($validatedData);

        return redirect('/dashboard/pegawais')->with('success', 'Informasi jabatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        if ($pegawai->image) {
            // Hapus gambar dari folder public
            $imagePath = public_path($pegawai->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Pegawai::destroy($pegawai->id);

        return redirect('/dashboard/pegawais')->with('success', 'Informasi Pegawai Telah Dihapus!');
    }
}