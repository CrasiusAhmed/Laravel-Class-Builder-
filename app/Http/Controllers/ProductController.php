<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends Controller
{
    use AuthorizesRequests;
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title1' => 'required|string|max:255',
            'description1' => 'required',
            'description2' => 'required',
            'title2' => 'required|string|max:255',
            'description3' => 'required',
            'price' => 'required|numeric',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'allow_comments' => 'nullable|boolean',
        ]);

        $validated['user_id'] = $request->user()->id;
        
        // Handle file uploads
        if ($request->hasFile('img1')) {
            $validated['img1'] = $request->file('img1')->store('products', 'public');
        }
        if ($request->hasFile('img2')) {
            $validated['img2'] = $request->file('img2')->store('products', 'public');
        }
        
        // Set allow_comments to false if not provided
        $validated['allow_comments'] = $request->has('allow_comments') ? $request->allow_comments : false;
        
        // Create the product
        $product = Product::create($validated);
        
        return redirect()->route('product.show', ['product' => $product->id])->with('success', 'Product created successfully!');
    }


    public function show($id)
    {
        $product = Product::with('comments.user')->findOrFail($id);

        $totalPoints = $product->comments->sum('rating_points');


        $averageRating = $product->comments->count() > 0
            ? $totalPoints / $product->comments->count()
            : 0;

        return view('product.show.show', compact('product', 'totalPoints', 'averageRating'));
    }


    public function storeClass(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
    

        $this->authorize('createClass', $product);
    
        $request->validate([
            'title_class1' => 'nullable|string',
            'title_class2' => 'nullable|string',
            'description_class1' => 'nullable|string',
            'description_class2' => 'nullable|string',
            'description_class3' => 'nullable|string',
            'likes_class' => 'nullable|string',
            'comments_class' => 'nullable|string',
            'views_class' => 'nullable|string',
            'price_class' => 'nullable|string',

            'img_class1' => 'nullable|string',
            'img_class2' => 'nullable|string',
        ]);

        $product->update([
            'title_class1' => $request->title_class1,
            'title_class2' => $request->title_class2,
            'description_class1' => $request->description_class1,
            'description_class2' => $request->description_class2,
            'description_class3' => $request->description_class3,
            'likes_class' => $request->likes_class,
            'comments_class' => $request->comments_class,
            'views_class' => $request->views_class,
            'price_class' => $request->price_class,

            'img_class1' => $request->img_class1,
            'img_class2' => $request->img_class2,
        ]);

        return redirect()->back()->with('success', 'Classes saved successfully!');
    }

    public function edit($productId)
    {

        $product = Product::findOrFail($productId);
        return view('product.update.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {


        $validated = $request->validate([
            'title1' => 'required|string|max:255',
            'description1' => 'required',
            'description2' => 'required',
            'title2' => 'required|string|max:255',
            'description3' => 'required',
            'price' => 'required|numeric',
            'img1' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
            'img2' => 'nullable|image|mimes:jpeg,png,jpg,gif',  
        ]);

        $product = Product::findOrFail($id);
        
        if ($request->hasFile('img1')) {
            $validated['img1'] = $request->file('img1')->store('products', 'public');
        }

        if ($request->hasFile('img2')) {
            $validated['img2'] = $request->file('img2')->store('products', 'public');
        }


        $validated['user_id'] = $request->user()->id;


        $product->update($validated);

        return redirect()->route('product.show', $product->id)
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($productId)
    {
        $product = Product::findOrFail($productId);

        $this->authorize('delete', $product);


        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully!');
    }


    public function userProducts()
    {
        $products = Product::where('user_id', auth()->id())->paginate(3);

        return view('product.user.user-product', compact('products'));
    }

    public function edit_deleteUserProducts()
    {
        $products = Product::where('user_id', auth()->id())->paginate(3);

        return view('product.user.editDelete', compact('products'));
    }

}
