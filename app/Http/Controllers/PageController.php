<?php
namespace App\Http\Controllers;

use App\Post;

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
        $posts = Post::all();
        return view('public.welcome', compact('posts'));
    }

    public function lehrmaterial()
    {
        return view('public.lehrmaterial');
    }

    public function team()
    {
        return view('public.team');
    }

    public function partner()
    {
        return view('public.lehrkonzept');
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
}
