<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::get('/iniciar-sesion', [AuthController::class, 'loginForm'])
    ->name('auth.loginForm');
Route::post('/iniciar-sesion', [AuthController::class, 'login'])
    ->name('auth.login');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])
    ->name('auth.logout');

Route::get('/registrarse', [AuthController::class, 'registerForm'])
    ->name('auth.registerForm');
Route::post('/create', [AuthController::class, 'create'])
    ->name('auth.create');

Route::get('/productos', [ProductsController::class, 'index'])
    ->name('productos.index');
Route::get('/productos/nuevo', [ProductsController::class, 'createProduct'])
    ->name('productos.nuevo')
    ->middleware(['auth', 'admin']);
Route::post('/productos/nuevo', [ProductsController::class, 'createdProduct'])
    ->name('productos.creado')
    ->middleware(['auth', 'admin']);
Route::get('/productos/{id}', [ProductsController::class, 'showProduct'])
    ->name('productos.producto')
    ->whereNumber('id');
Route::delete('/productos/{id}/eliminar', [ProductsController::class, 'delete'])
    ->name('productos.eliminar')
    ->middleware(['auth', 'admin']);
Route::get('/productos/{id}/editar', [ProductsController::class, 'editProduct'])
    ->name('productos.editar')
    ->middleware(['auth', 'admin']);
Route::put('/productos/{id}/editar', [ProductsController::class, 'editedProduct'])
    ->name('productos.editado')
    ->middleware(['auth', 'admin']);

Route::get('/articulos', [ArticlesController::class, 'index'])
    ->name('articulos.index');
Route::get('/articulos/nuevo', [ArticlesController::class, 'createArticle'])
    ->name('articulos.nuevo')
    ->middleware(['auth', 'admin']);
Route::post('/articulos/nuevo', [ArticlesController::class, 'createdArticle'])
    ->name('articulos.creado')
    ->middleware(['auth', 'admin']);

Route::get('/articulos/{id}', [ArticlesController::class, 'showArticle'])
    ->name('articulos.articulo')
    ->whereNumber('id');
Route::delete('/articulos/{id}/eliminar', [ArticlesController::class, 'delete'])
    ->name('articulos.eliminar')
    ->middleware(['auth', 'admin']);
Route::get('/articulos/{id}/editar', [ArticlesController::class, 'editArticle'])
    ->name('articulos.editar')
    ->middleware(['auth', 'admin']);
Route::put('/articulos/{id}/editar', [ArticlesController::class, 'editedArticle'])
    ->name('articulos.editado')
    ->middleware(['auth', 'admin']);
