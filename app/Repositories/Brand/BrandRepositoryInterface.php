<?php

namespace App\Repositories\Brand;
use Illuminate\Http\Request;
    /**
    * @param  int  $id
     */
interface BrandRepositoryInterface
{

    public function create($request);

    public function update($id, Request $request);

    public function getAll();

    public function find($id);

    public function delete($id);
}