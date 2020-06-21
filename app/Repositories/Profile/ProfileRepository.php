<?php

namespace App\Repositories\Profile;

use Illuminate\Http\Request;
use App\Model\Profile;
use App\Repositories\Profile\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
     
    /**
     * @var Profile 
     */

    protected $profile;

    /**
     * PostRepository constructor
     * 
     * @param Profile $profile
     */

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $profile = new $this->profile;
        $profile->user_name =  $request['user_name'];
        $profile->email =  $request['email'];
        $profile->first_name =  $request['first_name'];
        $profile->last_name =  $request['last_name'];
        $profile->gender =  $request['gender'];
        $profile->phone =  $request['phone'];
        $profile->group =  $request['group'];

        $profile->save();

        return $profile;
    }
    
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $profile = $this->profile->find($id);
        
        $profile->user_name =  $request['user_name'];
        $profile->email =  $request['email'];
        $profile->first_name =  $request['first_name'];
        $profile->last_name =  $request['last_name'];
        $profile->gender =  $request['gender'];
        $profile->phone =  $request['phone'];
        $profile->group =  $request['group'];

        $profile->save();

        return $profile;
    }

    public function getAll()
    {
       return $this->profile->get();
    }

    public function find($id)
    {
        return $this->profile
            ->where('profile_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $profile = $this->profile->find($id);
        $profile->delete();

        return true;
    }
}