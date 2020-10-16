<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    // public function blog($id, $author = 'name') {
    //     $posts = [
    //         1 => ['title' => 'learn laravel 6'],
    //         2 => ['title' => 'learn Angular 8'],
    //         ];
        
    //         return view('posts.blog', [
    //             'data' => $posts[$id],
    //             'author' => $author
    //         ]);
    // }
}
