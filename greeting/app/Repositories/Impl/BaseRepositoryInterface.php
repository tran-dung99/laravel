<?php

namespace App\Repositories\Impl;

interface BaseRepositoryInterface
{
    public function getAll();
    public function delete($id);
    public function getById($id);
}
