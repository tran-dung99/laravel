<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Impl\CustomerRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
     protected $table = "customers";

    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }
    public function create($request)
    {
//        DB::table('customers')->insert([
//            ['name' => $request->name, 'email' => $request->email,'address'=> $request->address],
//        ]);
        $customer = new $this->model;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
    }


    public function update($request)
    {
//        DB::table($this->table)
//            ->where('id',$request->id)
//            ->update(['name' => $request["name"],'email'=>$request["email"], 'address'=>$request["address"]]);
        $customer = $this->model::find($request->id);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->save();
    }

    public function search($request)
    {
        if ($request->searchCustomer !== null) {
            return DB::table($this->table)->where("name","like",'%'. $request->searchCustomer.'%')->get();
        }else{
            return DB::table($this->table)->get();
        }

    }
}
