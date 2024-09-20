<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriberController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->take(3)->get(); 
    $categories = Category::all();  
    return view('home', [
        'title' => 'Home',
        'posts' => $posts,
        'categories' => $categories
    ]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->get()]); 
});

Route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('authors/{user:username}', function(User $user){
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact' , ['title' => 'Contact Page']);
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
