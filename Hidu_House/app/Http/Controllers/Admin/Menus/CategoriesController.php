<?php

namespace App\Http\Controllers\Admin\Menus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.menu.add',[
            'title'=>'Create Category'
        ]);
    }
}
