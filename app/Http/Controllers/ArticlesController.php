<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;


class ArticlesController extends Controller
{
  public function index()
  {
    $articles = Article::all();
    return view('articles.index', [
      'articles' => $articles
    ]);
  }

  public function showArticle($id)
  {
    $article = Article::findOrFail($id);
    return view('articles.article', [
      'article' => $article
    ]);
  }

  public function createArticle()
  {
    return view('articles.create-article');
  }

  public function createdArticle(Request $request)
  {
    $input = $request->input();
    $request->validate(Article::validation(), Article::validationMessages());

    if ($request->hasFile('imagen')) {
      $imagen = $request->file('imagen');
      $nombreImagen = time() . "." . $imagen->clientExtension();
      $imagen->storeAs('', $nombreImagen, 'public_imgs');
      $input['imagen'] = $nombreImagen;
    }
    Article::create($input);
    return redirect()
      ->route('articulos.index')
      ->with('successMessage','¡Artículo creado con éxito!' );
  }

  public function delete($id)
  {
    $article = Article::findOrFail($id);
    $article->delete();
    if ($article->imagen != null) {
      unlink(public_path('imgs/' . $article->imagen));
    }
    return redirect()
      ->route('articulos.index')
      ->with('successMessage','¡Artículo eliminado con éxito!' );
  }

  public function editArticle($id)
  {
    $article = Article::findOrFail($id);
    return view('articles.edit-article', [
      'article' => $article
    ]);
  }

  public function editedArticle(Request $request, $id)
  {
    $request->validate(Article::validation(), Article::validationMessages());
    $input = $request->input();
    $article = Article::findOrFail($id);

    if ($request->hasFile('imagen')) {
      $imagen = $request->file('imagen');
      $nombreImagen = time() . "." . $imagen->clientExtension();
      $imagen->storeAs('', $nombreImagen, 'public_imgs');
      $input['imagen'] = $nombreImagen;
      $imagenVieja = $article->imagen;
    } else {
      $imagenVieja = null;
    }

    $article->update($input);

    if ($request->hasFile('imagen')) {
      unlink(public_path('imgs/' . $imagenVieja));
    }

    return redirect()
          ->route('articulos.index')
          ->with('successMessage','¡Artículo editado con éxito!' );
  }
}
