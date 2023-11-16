<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Jenis;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $jenis = Jenis::all();
        return view('tamu', compact('post','jenis'));
    }
}
