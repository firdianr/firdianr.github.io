<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Post;
use App\Models\User;
use App\Models\Dusun;
use App\Models\Category;
use App\Models\Hukum;
use App\Models\Lembaga;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function profil_desa()
    {
        $desas = Desa::all();
        $dusuns = Dusun::all();

        return view('landingpage.home', [
            'title' => 'Profil Desa Kaling',
            'desas' => $desas,
            'dusuns' => $dusuns
        ]);
    }

    public function kepegawaian()
    {
        $dusuns = Dusun::all();
        $pegawais = Pegawai::all();

        return view('landingpage.pegawai', [
            'title' => 'Pegawai Desa Kaling',
            'dusuns' => $dusuns,
            'pegawais' => $pegawais
        ]);
    }

    public function lembagas()
    {
        $dusuns = Dusun::all();
        $lembagas = Lembaga::all();

        return view('landingpage.lembagas', [
            'title' => 'Lembaga Desa',
            'dusuns' => $dusuns,
            'lembagas' => $lembagas
        ]);
    }

    public function showLembaga(Lembaga $lembaga)
    {
        $dusuns = Dusun::all();

        return view('landingpage.lembaga', [
            'title' => $lembaga->name,
            'dusuns' => $dusuns,
            'lembaga' => $lembaga
        ]);
    }

    public function hukums()
    {
        $dusuns = Dusun::all();
        $hukums = Hukum::all();

        return view('landingpage.hukums', [
            'title' => 'Peraturan',
            'dusuns' => $dusuns,
            'hukums' => $hukums,
        ]);
    }

    public function showHukum(Hukum $hukum)
    {
        $dusuns = Dusun::all();

        return view('landingpage.hukum', [
            'title' => $hukum->name,
            'dusuns' => $dusuns,
            'hukum' => $hukum,
        ]);
    }

    public function profildusun(Dusun $dusun)
    {
        $dusuns = Dusun::all();
        $posts = Post::where('dusun_id', $dusun->id)->latest()->get();

        return view('landingpage.dusun', [
            'title' => 'Profil Dusun',
            'dusuns' => $dusuns,
            'dusun' => $dusun,
            'posts' => $posts
        ]);
    }

    public function index(Request $request)
    {
        $title = 'Berita';
        $dusuns = Dusun::all();
        $categories = Category::all();
        $posts = Post::filter($request->only(['search', 'category', 'author']))
                     ->latest()
                     ->paginate(12)
                     ->withQueryString();

        return view('landingpage.posts', compact('title', 'dusuns', 'posts', 'categories'));
    }

    public function show(Post $post)
    {
        $title = $post->title;
        $dusuns = Dusun::all();
        return view('landingpage.post', compact('title', 'dusuns', 'post'));
    }

    public function authorPosts(User $user)
    {
        $title = count($user->posts) . ' Articles By ' . $user->name;
        $posts = $user->posts()->with('category', 'author')->get();

        return view('posts', compact('title', 'posts'));
    }

    public function categoryPosts(Category $category)
    {
        $title = count($category->posts) . ' Articles in ' . $category->name;
        $posts = $category->posts()->with('category', 'author')->get();

        return view('posts', compact('title', 'posts'));
    }
}
