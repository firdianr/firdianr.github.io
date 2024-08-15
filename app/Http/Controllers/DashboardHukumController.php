<?php

namespace App\Http\Controllers;

use App\Models\Hukum;
use Illuminate\Http\Request;

class DashboardHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.hukums.index', [
            'title' => 'Kelola Informasi Peraturan Desa',
            'hukums' => Hukum::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.hukums.create', [
            'title' => 'Tambah Peraturan Desa',
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
            'file' => 'nullable|mimes:pdf|',
        ]);

        if($request->file('file')){
            $validatedData['file'] = $request->file('file')->store('hukum-file');
        }
    
        Hukum::create($validatedData);
    
        return redirect('/dashboard/hukums')->with('success', 'Peraturan Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hukum $hukum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hukum $hukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hukum $hukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hukum $hukum)
    {
        //
    }
}
