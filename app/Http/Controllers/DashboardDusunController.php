<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardDusunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.dusuns.index',[
            'title' => 'Kelola Profil Dusun',
            'dusuns' => Dusun::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dusuns.create', [
            'title' => 'Tambah Dusun',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:dusuns',
            'kadus'=> 'required',
            'rw' => 'required',
            'rt' => 'required',
            'image' => 'image|file',
            'description' => 'required|string|max:255',
            'latar_belakang' => 'nullable|string',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('dusun-image');
        }
    
        Dusun::create($validatedData);
    
        return redirect('/dashboard/dusuns')->with('success', 'Dusun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dusun $dusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dusun $dusun)
    {
        return view('dashboard.dusuns.edit',[
            'title' => 'Kelola Profil Dusun',
            'dusun' => $dusun
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dusun $dusun)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'image' => 'image|file', 
            'kadus' => 'required',
            'rw' => 'required',
            'rt' => 'required',
            'description' => 'required|string|max:255',
            'latar_belakang' => 'nullable|string',
        ];

        // dd($request);

        if($request->slug != $dusun->slug){
            $rules['slug'] = 'required|unique:dusuns';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('dusun-image');
        }

        // dd($validatedData);
    
        Dusun::where('id', $dusun->id)->update($validatedData);
    
        return redirect('/dashboard/dusuns')->with('success', 'Data dusun berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dusun $dusun)
    {
        if($dusun->image){
            Storage::delete($dusun->image);
        }

        Dusun::destroy($dusun->id);

        return redirect('/dashboard/dusuns')->with('success', 'Dusun Telah Dihapus!');
    }
}
