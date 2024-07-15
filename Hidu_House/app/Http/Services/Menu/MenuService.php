<?php

namespace App\Http\Services\Menu;

use App\Models\Categories;
use Illuminate\Support\Facades\Session;

class MenuService
{
    public function create($request)
    {
        try {
            Categories::create([
                'name_category' => (string) $request->input('Name'),
                'anh_dm' => (string) $request->input('anh_dm'),
            ]);

            Session::flash('success', 'Complete');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }
}
