<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
 protected $table;
 protected $model;

    public function getAll()
    {
        return $this->model->all();
    }

    public function delete($id)
    {
//        DB::table($this->table)->where('id', '=', $id)->delete();
            $customer = $this->model::findOrFail($id);
            $customer->delete();
    }

    public function getById($id)
    {
//        return DB::table($this->table)->where("id",$id)->get()->first();
        return  $this->model::where('id','=',$id)->firstOrFail();
    }
}
