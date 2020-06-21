<?php

namespace App\Http\Controllers;

use App\Repositories\Login\RegistrationRepositoryInterface;
use App\Model\Login;
use App\Repositories;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    private $registrationRepository;

    public function __construct(RegistrationRepositoryInterface $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $registration = $this->registrationRepository->CreateUser($request);
        return response()->json(['registration'=>$registration], 201);
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
        $registration = $this->registrationRepository->UpdateUser($id, $request);
        return response()->json(['registration'=>$registration], 201);
    }


    public function getAll()
    {
        $registration = $this->registrationRepository->getAll();
        return response()->json(['registration'=>$registration], 201);
    }

    public function findId($id)
    {
        $registration = $this->registrationRepository->find($id);
        return response()->json(['registration'=>$registration], 201); 
    }

    public function delete($id)
    {
        $this->registrationRepository->delete($id);
       return response()->json('Deleted', 200);

    }

}
