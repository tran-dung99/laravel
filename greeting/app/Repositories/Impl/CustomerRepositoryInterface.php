<?php

namespace App\Repositories\Impl;

interface CustomerRepositoryInterface extends BaseRepositoryInterface
{
public function create($request);
public function update($request);
public function search($request);
}
