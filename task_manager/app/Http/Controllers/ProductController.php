<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function getAll() {
        $users = DB::table("products")->get();

       return view("product.list",compact("users"));
    }

    public function delete($id)
    {
        DB::table('products')->where('id', '=', $id)->delete();
        return redirect()->route("product.show");
    }


    public function showFormCreate()
    {
        return view("product.create");
    }

    public function create(Request $request) {
        DB::table('products')->insertOrIgnore([
            ['name' => $request->name, 'origin' => $request->origin,'price' => $request->price,'function' => $request->function,'detail' => $request->detail],
        ]);
        return redirect()->route("product.show");
    }

    public function detail($id)
    {
        $user = DB::table('products')->where('id', '=', $id)->get()->first();
        return view("product.detail",compact("user"));
    }
}
