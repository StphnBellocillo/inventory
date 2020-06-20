<?php

namespace App\Repositories\Group;
use Illuminate\Http\Request;
    /**
    * @param  int  $id
     */
interface GroupRepositoryInterface
{

    public function create($request);

    public function update($id, Request $request);

    public function getAll();

    public function find($id);

    public function delete($id);
}