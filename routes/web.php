<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Farhan Putra', 'title' => 'About Page']);
});

Route::get('/posts', function () {
    // trik eager loading untuk menghindari N+1 problem
    // $posts = Post::with(['author', 'category'])->latest()->get();

    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    /* use(variabel) fungsinya buat menggunakan variabel global ke dalam sebuah function scope */
    /* :: fungsinya untuk mengambil method static dalam sebuah class */
    // $post = Post::find($post);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
/**
 * {user:username} maksudnya adalah kita mengaksees data username dari tabel user
 */
Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Article By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('posts', ['title' => $category->name . ' Category', 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
