<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Jenis;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        $jenis = Jenis::all();
        return view('app', compact('post','jenis'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'name'=>'required',
            'url' => 'required',
            'id_jenis' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('posts')->with('success','Link Website Berhasil Ditambahkan');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'id_jenis'=>'required'
        ]);

        Post::find($id)->update($request->all());

        return redirect()->route('posts')->with('success','Link Website Berhasil Di Ubah');
    }

    public function destroy($id){
          //fungsi eloquent untuk menghapus data
        Post::find($id)->delete();
        return redirect()->route('posts')
            ->with('success', 'Link Website Berhasil Dihapus');
    }
}
