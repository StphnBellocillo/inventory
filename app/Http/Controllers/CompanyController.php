<?php

namespace App\Http\Controllers;

use App\Repositories\Company\CompanyRepositoryInterface;
use App\Model\Company;
use App\Repositories;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $company = $this->companyRepository->create($request);
        return response()->json(['company'=>$company], 201);
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
        $company = $this->companyRepository->update($id, $request);
        return response()->json(['company'=>$company], 201);
    }


    public function getAll()
    {
        $company = $this->companyRepository->getAll();
        return response()->json(['company'=>$company], 201);
    }

    public function findId($id)
    {
        $company = $this->companyRepository->find($id);
        return response()->json(['company'=>$company], 201); 
    }

    public function delete($id)
    {
        $this->companyRepository->delete($id);
       return response()->json('Deleted', 200);

    }
}
