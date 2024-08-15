<?php

namespace App\Http\Controllers;

use App\Models\category;
use Database\Seeders\CategorySeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'title' => 'Kelola Kategori',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Tambah Kategori',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories', 
            'color' => 'required|unique:categories', 
        ]);
    
        category::create($validatedData);
    
        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('dashboard.categories.edit',[
            'title' => 'Kelola Kategori',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'color' => 'required|unique:categories', 
        ];

        if($request->slug != $category->slug){
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);
    
        category::where('id', $category->id)->update($validatedData);
    
        return redirect('/dashboard/categories')->with('success', 'Data kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category = Category::where('slug', $category->slug)->firstOrFail();

        if ($category->posts()->count() > 0) {
            return redirect()->back()->with('error', 'Kategori tidak dapat dihapus karena memiliki postingan.');
        }

        $category->delete();
        return redirect('/dashboard/categories')->with('success', 'Kategori berhasil dihapus.');

        // Category::destroy($category->id);

        // return redirect('/dashboard/categories')->with('success', 'Kategori Telah Berhasil Dihapus!');
    }
}
