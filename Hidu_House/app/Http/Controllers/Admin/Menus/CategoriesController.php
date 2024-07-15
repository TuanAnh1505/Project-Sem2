<?php

namespace App\Http\Controllers\Admin\Menus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
class CategoriesController extends Controller
{
    protected $menuService;
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }
    public function create()
    {
        return view('admin.menu.add',[
            'title'=>'Create Category'
        ]);
    }
    public function store(CreateFormRequest $request)
    {
        $result =$this->menuService->create($request);
        return redirect()->back();
    }
}
