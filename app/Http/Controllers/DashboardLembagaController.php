<?php

namespace App\Http\Controllers;

use App\Models\Lembaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardLembagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.lembagas.index', [
            'title' => 'Kelola Informasi Lembaga Desa',
            'lembagas' => Lembaga::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.lembagas.create', [
            'title' => 'Tambah Lembaga Desa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:lembagas',
            'image' => 'image|file',
            'description' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('lembaga-image');
        }
    
        Lembaga::create($validatedData);
    
        return redirect('/dashboard/lembagas')->with('success', 'Lembaga Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lembaga $lembaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lembaga $lembaga)
    {
        return view('dashboard.lembagas.edit',[
            'title' => 'Kelola Informasi Lembaga Desa',
            'lembaga' => $lembaga,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lembaga $lembaga)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'image' => 'image|file',
            'description' => 'required',
        ];

        // dd($request);

        if($request->slug != $lembaga->slug){
            $rules['slug'] = 'required|unique:lembagas';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('lembaga-image');
        }

        // dd($validatedData);
    
        Lembaga::where('id', $lembaga->id)->update($validatedData);
    
        return redirect('/dashboard/lembagas')->with('success', 'Informasi Lembaga Desa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lembaga $lembaga)
    {
        if($lembaga->image){
            Storage::delete($lembaga->image);
        }

        Lembaga::destroy($lembaga->id);

        return redirect('/dashboard/lembagas')->with('success', 'Informasi Lembaga Desa Telah Dihapus!');
    }
}
