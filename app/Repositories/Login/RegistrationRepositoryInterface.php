<?php

namespace App\Repositories\Login;
use Illuminate\Http\Request;
    /**
    * @param  int  $id
     */
interface RegistrationRepositoryInterface
{
    public function CreateUser(Request $request);

    public function UpdateUser($id, Request $request);

    public function getAll();

    public function find($id);

    public function delete($id);

}