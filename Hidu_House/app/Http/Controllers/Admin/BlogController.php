<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baiviet;

class BlogController extends Controller
{
    public function showBlog()
    {
        $title = "Blog";
        $baiviets = Baiviet::all();
        return view('blog', compact('title', 'baiviets'));
    }

    public function showContact()
    {
        $title = 'Contact'; 
        return view('contact', compact('title'));
    }

    public function showDetails($mabv)
    {
        $baiviet = Baiviet::find($mabv);
        $title = "Blog";

        if (!$baiviet) {
            abort(404); 
        }

        $otherBaiviets = Baiviet::where('id_bv', '!=', $mabv)->get();

        return view('blog-details', compact('title', 'baiviet', 'otherBaiviets'));
    }
}
