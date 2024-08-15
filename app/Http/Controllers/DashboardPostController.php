<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Dusun;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'Kelola Berita', 
            'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(12)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public function categoryPosts(Category $category)
    {
        $title = count($category->posts) . ' Articles in ' . $category->name;
        $posts = $category->posts()->with('category', 'author')->get();

        return view('dashboard.posts.index', compact('title', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Buat Berita',
            'categories' => Category::all(),
            'dusuns' => Dusun::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255|unique:posts',
            'slug' => 'required|unique:posts',
            'writer' => 'required',
            'editor' => 'required',
            'category_id' => 'required',
            'dusun_id' => 'required',
            'image' => 'image|file',
            'image_description' => 'max:64',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            // Menyimpan file gambar di dalam folder public/post-image
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('post-image'), $imageName);
            $validatedData['image'] = 'post-image/' . $imageName;
        }

        $validatedData['author_id'] = Auth::user()->id;

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Berhasil Upload Berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'How Post',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'title' => 'Edit Post',
            'post' => $post,
            'categories' => Category::all(),
            'dusuns' => Dusun::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'writer' => 'required',
            'editor' => 'required',
            'category_id' => 'required',
            'dusun_id' => 'required',
            'image' => 'image|file',
            'image_description' => 'max:64',
            'body' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($post->image) {
                // Hapus gambar lama dari folder public jika ada
                $oldImagePath = public_path($post->image);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            // Simpan gambar baru di folder public/post-image
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('post-image'), $imageName);
            $validatedData['image'] = 'post-image/' . $imageName;
        }

        $post->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Berita Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            // Hapus gambar dari folder public
            $imagePath = public_path($post->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Berita Berhasil Dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
