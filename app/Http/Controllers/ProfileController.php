<?php

namespace App\Http\Controllers;

use App\Repositories\Profile\ProfileRepositoryInterface;
use App\Model\Profile;
use App\Repositories;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profileRepository;

    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $profile = $this->profileRepository->create($request);
        return response()->json(['profile'=>$profile], 201);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update($id ,Request $request)
    {
        $profile = $this->profileRepository->update($id, $request);
        return response()->json(['profile'=>$profile], 201);
    }


    public function getAll()
    {
        $profile = $this->profileRepository->getAll();
        return response()->json(['profile'=>$profile], 201);
    }

    public function findId($id)
    {
        $profile = $this->profileRepository->find($id);
        return response()->json(['profile'=>$profile], 201); 
    }

    public function delete($id)
    {
        $this->profileRepository->delete($id);
       return response()->json('Deleted', 200);

    }
}
