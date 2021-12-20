<?php

namespace App\Repositories;

use App\Repositories\Impl\CustomerRepositoryInterface;
use Illuminate\Support\Facades\DB;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
     protected $table = "customers";


    public function create($request)
    {
        DB::table('customers')->insert([
            ['name' => $request->name, 'email' => $request->email,'address'=> $request->address],
        ]);
    }


    public function update($request)
    {
        DB::table($this->table)
            ->where('id',$request->id)
            ->update(['name' => $request["name"],'email'=>$request["email"], 'address'=>$request["address"]]);
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
