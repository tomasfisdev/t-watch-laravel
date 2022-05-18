<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brands;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
  public function index()
  {
    $products = Product::with('brands')->get();
    return view('products.index', [
      'products' => $products
    ]);
  }

  public function showProduct($id)
  {
    $product = Product::findOrFail($id);
    return view('products.product', [
      'product' => $product
    ]);
  }

  public function createProduct()
  {
    $brands = Brands::all();
    return view('products.create-product', [
      'brands' => $brands
    ]);
  }

  public function createdProduct(Request $request)
  {
    $input = $request->input();
    $request->validate(Product::validation(), Product::validationMessages());

    if ($request->hasFile('imagen')) {
      $imagen = $request->file('imagen');
      $nombreImagen = time() . "." . $imagen->clientExtension();
      $imagen->storeAs('', $nombreImagen, 'public_imgs');
      $input['imagen'] = $nombreImagen;
    }
    Product::create($input);
    return redirect()
      ->route('productos.index')
      ->with('successMessage','¡Producto creado con éxito!' );
  }

  public function delete($id)
  {
    $product = Product::findOrFail($id);
    $product->delete();
    if ($product->imagen != null) {
      unlink(public_path('imgs/' . $product->imagen));
    }
    return redirect()
      ->route('productos.index')
      ->with('successMessage','¡Producto eliminado con éxito!' );
  }

  public function editProduct($id)
  {
    $brands = Brands::all();
    $product = Product::findOrFail($id);
    return view('products.edit-product', [
      'product' => $product,
      'brands' => $brands
    ]);
  }

  public function editedProduct(Request $request, $id)
  {
    $request->validate(Product::validation(), Product::validationMessages());
    $input = $request->input();
    $product = Product::findOrFail($id);

    if ($request->hasFile('imagen')) {
      $imagen = $request->file('imagen');
      $nombreImagen = time() . "." . $imagen->clientExtension();
      $imagen->storeAs('', $nombreImagen, 'public_imgs');
      $input['imagen'] = $nombreImagen;
      $imagenVieja = $product->imagen;
    } else {
      $imagenVieja = null;
    }

    $product->update($input);
    
    if ($request->hasFile('imagen')) {
      unlink(public_path('imgs/' . $imagenVieja));
    }

    return redirect()
      ->route('productos.index')
      ->with('successMessage','¡Producto editado con éxito!' );
  }
}
