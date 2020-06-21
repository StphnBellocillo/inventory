<?php

namespace App\Repositories\Company;
use Illuminate\Http\Request;
    /**
    * @param  int  $id
     */
interface CompanyRepositoryInterface
{

    public function create($request);

    public function update($id, Request $request);

    public function getAll();

    public function find($id);

    public function delete($id);
}