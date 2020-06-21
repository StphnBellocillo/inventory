<?php

namespace App\Repositories\Company;

use Illuminate\Http\Request;
use App\Model\Company;
use App\Repositories\Company\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
     
    /**
     * @var Company 
     */

    protected $company;

    /**
     * PostRepository constructor
     * 
     * @param Company $company
     */

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $company = new $this->company;

        $company->company_name =  $request['company_name'];
        $company->charge_amount =  $request['charge_amount'];
        $company->var_charge_percentage =  $request['var_charge_percentage'];
        $company->address =  $request['address'];
        $company->phone =  $request['phone'];
        $company->country =  $request['country'];
        $company->message =  $request['message'];
        $company->currency =  $request['currency'];

        $company->save();

        return $company;
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
        $company = $this->company->find($id);
        
        $company->company_name =  $request['company_name'];
        $company->charge_amount =  $request['charge_amount'];
        $company->var_charge_percentage =  $request['var_charge_percentage'];
        $company->address =  $request['address'];
        $company->phone =  $request['phone'];
        $company->country =  $request['country'];
        $company->message =  $request['message'];
        $company->currency =  $request['currency'];

        $company->save();

        return $company;
    }

    public function getAll()
    {
       return $this->company->get();
    }

    public function find($id)
    {
        return $this->company
            ->where('company_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $company = $this->company->find($id);
        $company->delete();

        return true;
    }
}