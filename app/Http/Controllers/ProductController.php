<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(15);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateProduct($request);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];

        if ($request->hasFile('image')) {
            $product->image = $this->storeImage($request->file('image'));
        }

        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Prodotto creato con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $this->validateProduct($request, $product->id);

        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];

        if ($request->hasFile('image')) {
            $this->deleteImage($product->image);
            $product->image = $this->storeImage($request->file('image'));
        }

        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Prodotto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->deleteImage($product->image);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Prodotto eliminato con successo.');
    }

    /**
     * Validate the product data.
     */
    private function validateProduct(Request $request, $productId = null)
    {
        $rules = [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ];

        return $request->validate($rules);
    }

    /**
     * Store the image and return the path.
     */
    private function storeImage($image)
    {
        $fileName = time() . '_' . $image->getClientOriginalName();
        return $image->storeAs('products', $fileName, 'public');
    }

    /**
     * Delete the image if it exists.
     */
    private function deleteImage($imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
 }