<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;

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

// Example Routes
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/pages/{slug}', [WebsiteController::class, 'page'])->name('blog.page');
Route::get('/privacypolicy', [WebsiteController::class, 'privacypolicy'])->name('privacypolicy');

Route::match(['get', 'post'], '/dashboard', function () {
//    dd('test');
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('/', [CategoriesController::class, 'index'])
        ->name('categories.category.index');
    Route::get('/create', [CategoriesController::class, 'create'])
        ->name('categories.category.create');
    Route::get('/show/{category}', [CategoriesController::class, 'show'])
        ->name('categories.category.show')->where('id', '[0-9]+');
    Route::get('/{category}/edit', [CategoriesController::class, 'edit'])
        ->name('categories.category.edit')->where('id', '[0-9]+');
    Route::post('/', [CategoriesController::class, 'store'])
        ->name('categories.category.store');
    Route::put('category/{category}', [CategoriesController::class, 'update'])
        ->name('categories.category.update')->where('id', '[0-9]+');
    Route::delete('/category/{category}', [CategoriesController::class, 'index'])
        ->name('categories.category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'posts',
], function () {
    Route::get('/', [PostsController::class, 'index'])
        ->name('posts.post.index');
    Route::get('/create', [PostsController::class, 'create'])
        ->name('posts.post.create');
    Route::get('/show/{post}', [PostsController::class, 'show'])
        ->name('posts.post.show')->where('id', '[0-9]+');
    Route::get('/{post}/edit', [PostsController::class, 'edit'])
        ->name('posts.post.edit')->where('id', '[0-9]+');
    Route::post('/', [PostsController::class, 'store'])
        ->name('posts.post.store');
    Route::put('post/{post}', [PostsController::class, 'update'])
        ->name('posts.post.update')->where('id', '[0-9]+');
    Route::delete('/post/{post}', [PostsController::class, 'index'])
        ->name('posts.post.destroy')->where('id', '[0-9]+');
});

Route::post('editor/upload', function (Request $request) {
//    dd($request->all(),$request->hasFile('upload'));

    if ($request->has('upload')) {
        $path = $request->upload->store('public/images');
        $path = \Illuminate\Support\Str::replace('public/', 'storage/', $path);
//        $imageName = time() . '.' . $request->upload->extension();
//        $p = $request->upload->move(public_path('uploads'), $imageName);
        // Required: anonymous function reference number as explained above.
        $funcNum = $request->CKEditorFuncNum??4;
        $message = "DONE";
        $path = asset($path);
        $token = $_POST['ckCsrfToken'] ;
        @header('Content-type: text/html; charset=utf-8');

        echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('$funcNum', '$path', '$message');</script>";

//        return asset($path);
    }
})->name('editor.upload');