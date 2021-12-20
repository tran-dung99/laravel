<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseRepositoryInterface;
use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
 protected $table;

    public function getAll()
    {
        return DB::table($this->table)->get();
    }

    public function delete($id)
    {
        DB::table($this->table)->where('id', '=', $id)->delete();
    }

    public function getById($id)
    {
        return DB::table($this->table)->where("id",$id)->get()->first();
    }
}
