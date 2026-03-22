<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/feed', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'profile' => [
                'displayName' => 'Adrian',
                'handle' => '@adrian',
                'avatar' => 'images/adrian.png',
            ],
            'content' => <<<str
            I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>
            str,
            'likesCount' => 23,
            'repliesCount' => 45,
            'repostsCount' => 151,
        ]
    ]));
    return view('feed', compact('feedItems'));
});
Route::get('/profile', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'profile' => [
                'displayName' => 'Adrian',
                'handle' => '@adrian',
                'avatar' => 'images/adrian.png',
            ],
            'content' => 'I made this! <a href="#">#myartwork</a> <a href="#">#pixl</a>',
            'likesCount' => 23,
            'repliesCount' => 45,
            'repostsCount' => 151,
        ]
    ]));
    return view('profile', compact('feedItems'));
});
