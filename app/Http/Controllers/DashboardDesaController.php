<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.desas.index',[
            'title' => 'Kelola Profil Desa',
            'desas' => Desa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desa $desa)
    {
        
        return view('dashboard.desas.edit',[
            'title' => 'Kelola Profil Desa',
            'desa' => $desa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Desa $desa)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|file',
            'description' => 'required|string|max:255',
            'map' => 'image|file',
            'negara' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kode_pos' => 'required|string|max:10',
            'latar_belakang' => 'nullable|string',
            'luas_wilayah' => 'nullable|integer',
            'batas_utara' => 'nullable|string|max:255',
            'batas_selatan' => 'nullable|string|max:255',
            'batas_timur' => 'nullable|string|max:255',
            'batas_barat' => 'nullable|string|max:255',
            'jumlah_penduduk' => 'nullable|integer',
            'jumlah_penduduk_laki_laki' => 'nullable|integer',
            'jumlah_penduduk_perempuan' => 'nullable|integer',
            'jumlah_rw' => 'nullable|integer',
            'jumlah_rt' => 'nullable|integer',
            'jumlah_kk' => 'nullable|integer',
            'wni_laki_laki' => 'nullable|integer',
            'wni_perempuan' => 'nullable|integer',
            'wna_laki_laki' => 'nullable|integer',
            'wna_perempuan' => 'nullable|integer',
            'islam' => 'nullable|integer',
            'katholik' => 'nullable|integer',
            'protestan' => 'nullable|integer',
            'hindu' => 'nullable|integer',
            'budha' => 'nullable|integer',
            'lain_lain' => 'nullable|integer',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('desa-image');
        }

        if($request->file('map')){
            if($request->oldMap){
                Storage::delete($request->oldMap);
            }
            $validatedData['map'] = $request->file('map')->store('desa-image');
        }
    
        Desa::where('id', $desa->id)->update($validatedData);
    
        return redirect('/dashboard/desas')->with('success', 'Data desa berhasil diperbarui.');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desa $desa)
    {
        //
    }
}
