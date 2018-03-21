<?php
namespace App\Http\Controllers;

use App\Post;
use App\Member;
class PageController extends Controller
{
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $this->middleware('auth');
        return view('app.home');
    }

    public function welcome()
    {
        $posts = Post::orderBy('created_at','desc')->limit(3)->get();
        return view('public.welcome', compact('posts'));
    }

    public function lehrmaterial()
    {
        return view('public.lehrmaterial');
    }

    public function team()
    {
        $members = Member::where('leader','=',false)->get();
        $leaders = Member::where('leader','=',true)->get();
        return view('public.team',compact('members','leaders'));
    }

    public function partner()
    {
        return view('public.partner');
    }

    public function vision()
    {
        return view('public.vision');
    }

    public function software()
    {
        return view('public.software');
    }

    public function impressum(){
        return view('public.impressum');
    }

    public function blog()
    {
        $posts = Post::all();
        return view('public.blog',compact('posts'));
    }

    public function show(Post $post){
        return view('blog.show',compact('post'));
    }

}
