<?php

namespace App\Http\Controllers;

use App\Repositories\Brand\BrandRepositoryInterface;
use App\Model\Brand;
use App\Repositories;


use Illuminate\Http\Request;

class BrandController extends Controller
{
    private $brandRepository;

     public function __construct(BrandRepositoryInterface $brandRepository)
     {
         $this->brandRepository = $brandRepository;
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function create(Request $request)
     {
         $brand = $this->brandRepository->create($request);
         return response()->json(['brand'=>$brand], 201);
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
         $brand = $this->brandRepository->update($id, $request);
         return response()->json(['brand'=>$brand], 201);
     }


     public function getAll()
     {
         $brand = $this->brandRepository->getAll();
         return response()->json(['brand'=>$brand], 201);
     }

     public function findId($id)
     {
         $brand = $this->brandRepository->find($id);
         return response()->json(['brand'=>$brand], 201); 
     }

     public function delete($id)
     {
         $this->brandRepository->delete($id);
        return response()->json('Deleted', 200);

     }

}
