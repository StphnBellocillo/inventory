<?php

namespace App\Repositories\Login;

use Illuminate\Http\Request;
use App\Model\User;
use App\Repositories\Login\RegistrationRepositoryInterface;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    /**
     * @var User 
     */

    protected $user;

    /**
     * PostRepository constructor
     * 
     * @param User $user
     */

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function CreateUser(Request $request)
    {
        $user = new $this->user;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        
        $user->save();

        return $user;
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateUser($id, Request $request)
    {
        $user = $this->user->find($id);
        
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];

        $user->save();

        return $user;
    }

    public function getAll()
    {
       return $this->user->get();
    }

    public function find($id)
    {
        return $this->user
            ->where('id', $id)
            ->get();
    }

    public function delete($id)
    {
        $user = $this->user->find($id);
        $user->delete();

        return true;
    }
}