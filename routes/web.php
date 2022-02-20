<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Builder;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tree', function () {
    // return view('welcome');

    $categoryTree = Category::tree()->get()->toTree();
    // dd($categoryTree);
    return view('tree', compact('categoryTree'));
});


/**
 * Sólo los elementos root
 */
Route::get('/tree/roots', function () {
    $categoryTree = Category::isRoot()->tree()->get()->toTree();
    return view("tree", compact("categoryTree"));
});

/**
 * Sólo los que estén habilitados
 */
Route::get('/tree/enabled', function () {
    $categoryTree = Category::withRecursiveQueryConstraint(function (Builder $query) {
        $query->where('categories.enabled', true);
    }, function () {
        return Category::tree()->get()->toTree();
    });
    return view("tree", compact("categoryTree"));
});

/**
 * Modelo con profundidad limitada
 */
Route::get('/tree/max-level/{level}', function (int $level) {
    $categoryTree = Category::find(3)
        ->descendantsAndSelf()
        ->where("level", "<", $level)
        ->get()
        ->toTree();
    return view("tree", compact("categoryTree"));
});

/**
 * Sólo los que tienen hijos
 */
Route::get("/tree/has-children", function () {
    $categoryTree = Category::hasChildren()->tree()->get()->toTree();
    return view("tree", compact("categoryTree"));
});

/**
 * Modelo con todos sus hijos
 */
Route::get('/tree/{id}', function (int $id) {
    $categoryTree = Category::find($id)->descendantsAndSelf()->get()->toTree();
    return view("tree", compact("categoryTree"));
});
