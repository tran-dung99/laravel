<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;

class CustomerController extends Controller
{
    //
    public function showList() {
        $customers = DB::table("customers")->get();
        return view("customer.list",compact("customers"));
    }

    public function deleteCustomer($id)
    {
        DB::table('customers')->where('id', '=', $id)->delete();
        return redirect()->route("customers");
    }

    public function showFormCreate()
    {
        return view("customer.create");
    }

    public function createNewCustomer(Request $request)
    {
        DB::table('customers')->insert([
            ['name' => $request->name, 'email' => $request->email,'address'=> $request->email],
        ]);
        return redirect()->route("customers");
    }

    public function detail($id)
    {
        $customer = DB::table("customers")->where("id",$id)->get()->first();
//        dd($customer);
        return view("customer.detail",compact("customer"));
    }

    public function showFormUpdate($id) {
        $customer = DB::table("customers")->where("id",$id)->get()->first();
//        dd($customer);
        return view("customer.update",compact("customer"));
    }

    public function updateCustomer(Request $request)
    {
         DB::table('customers')
            ->where('id',$request["id"])
            ->update(['name' => $request["name"],'email'=>$request["email"], 'address'=>$request["address"]]);
//        dd($request);
        return redirect()->route("customers");
    }
}
