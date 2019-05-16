<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::paginate(12);
        return view('landing', ['posts'=>$posts]);
    }

    public function blog($id)
    {
        $post=Post::findOrFail($id);
        return view('blog', ["post"=>$post]);
    }
}
