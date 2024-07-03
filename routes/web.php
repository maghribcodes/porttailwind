<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home', ['title' => 'Home Page']);
// });

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('profile', ['title' => 'Home Page']);
// });

Route::get('/project-1', function () {
    return view('project-1');
});

Route::get('/project-2', function () {
    return view('project-2');
});

Route::get('/project-3', function () {
    return view('project-3');
});

Route::get('/project-4', function () {
    return view('project-4');
});

Route::get('/project-5', function () {
    return view('project-5');
});

Route::get('/project-6', function () {
    return view('project-6');
});

Route::get('/project-7', function () {
    return view('project-7');
});

Route::get('/project-8', function () {
    return view('project-8');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Pometaro', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page', 'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Pometaro',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fuga asperiores error similique voluptates ullam, aperiam quos ipsum? Esse iure nostrum blanditiis voluptatum perspiciatis optio obcaecati deserunt delectus! Error, qui?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-4',
                'title' => 'Judul Artikel 4',
                'author' => 'Pometaro',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-3',
            'title' => 'Judul Artikel 3',
            'author' => 'Pometaro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fuga asperiores error similique voluptates ullam, aperiam quos ipsum? Esse iure nostrum blanditiis voluptatum perspiciatis optio obcaecati deserunt delectus! Error, qui?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-4',
            'title' => 'Judul Artikel 4',
            'author' => 'Pometaro',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => "Contact Page"]);
});
