<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;
class PagerController extends Controller
{
    public function posts() {
        $posts = Post::all();
        return view('content.posts', compact('posts'));
    }
    public function post($id) {
        $post = DB::table('posts')->find($id);
        return view('content.post', compact('post'));
    }
    public function store(Request $request) {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'url' => 'image|mimes:jpg,jpeg,gif,png|max:2048',
        ]);
        $img_name = time() . '.' . $request->url->getClientOriginalExtension();
           $post = new Post;
           $post->title = request('title');
           $post->body = request('body');
           $post->url =  $img_name;
           $post->save();

        $request->url->move(public_path('uplaod'), $img_name);

        return redirect('/posts');
    }
}
//Post::create([
//  'title' => request('title'),
//   'body' => request('body'),
//   'url' => request('url')
// ]);