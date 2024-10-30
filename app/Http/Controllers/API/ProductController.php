<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return  Product::with('category')->get();
    }

    public function getProductsByCategory($categoryId)
    {
        // Verificar si la categoría existe
        $category = Category::find($categoryId);

        if (!$category) {
            throw new ModelNotFoundException('Categoría no encontrada');
        }

        // Obtener los productos de la categoría especificada
        $products = $category->products; // Usando la relación definida en el modelo Category

        return response()->json($products);
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(null, 204);
    }
}
