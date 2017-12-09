<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Cooedumag;
use App\Models\Event;
use App\Models\History;
use App\Models\Information;
use App\Models\Manager;

Route::get('/', function () {
    return view('index', [
        'banner' => Banner::where('status', 'activo')->get(),
        'events' => Event::where('status', 'activo')->inRandomOrder()->limit(4)->get(),
        'information' => Information::all(),
        'history' => History::find(1),
    ]);
});

Route::get('/institucion', function () {
    return view('historia', [
        'managers' => Manager::where('status', 'activo')->get(),
        'cooedumag' => Cooedumag::all(),
    ]);
});

Route::get('/galeria', function () {
    return view('galeria', [
        'events' => Event::where('status', 'activo')->orderByDesc('id')->get(),
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'blog' => Blog::where('status', 'activo')->orderByDesc('id')->get(),
    ]);
});

Route::get('/blog/{name}/{id}', function ($name, $id) {
    return view('detalle-blog', [
        'blog' => Blog::find($id),
        'blogs' => Blog::where('status', 'activo')->whereNotIn('id', [$id])->orderByDesc('id')->get(),
    ]);
})->where(['id' => '[0-9]+', 'name' => '[a-z-0-9]+']);

Route::post('/contact', 'ContactController');