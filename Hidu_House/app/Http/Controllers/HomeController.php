<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch featured products
        $featuredProducts = Product::where('featured', true)
                                   ->take(8)
                                   ->get();

        // Fetch latest products
        $latestProducts = Product::latest()
                                 ->take(8)
                                 ->get();

        // Fetch all categories
        $categories = Category::all();

        return view('home', compact('featuredProducts', 'latestProducts', 'categories'));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Process the contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Here you would typically send an email or save the contact form data
        // For this example, we'll just redirect back with a success message

        return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }

    /**
     * Show the search results.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('ProductName', 'like', "%$query%")
                           ->orWhere('description', 'like', "%$query%")
                           ->paginate(12);

        return view('search', compact('products', 'query'));
    }
}
