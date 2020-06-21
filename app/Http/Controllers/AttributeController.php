<?php

namespace App\Http\Controllers;
use App\Repositories\Attribute\AttributeRepositoryInterface;
use App\Model\Attribute;
use App\Repositories;

use Illuminate\Http\Request;

class AttributeController extends Controller
{
    //
    private $AttributeRepository;

     public function __construct(AttributeRepositoryInterface $AttributeRepository)
     {
         $this->AttributeRepository = $AttributeRepository;
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function create(Request $request)
     {
         $attribute = $this->AttributeRepository->create($request);
         return response()->json(['attribute'=>$attribute], 201);
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
         $attribute = $this->AttributeRepository->update($id, $request);
         return response()->json(['attribute'=>$attribute], 201);
     }


     public function getAll()
     {
         $attribute = $this->AttributeRepository->getAll();
         return response()->json(['attribute'=>$attribute], 201);
     }

     public function findId($id)
     {
         $attribute = $this->AttributeRepository->find($id);
         return response()->json(['attribute'=>$attribute], 201); 
     }

     public function delete($id)
     {
         $this->AttributeRepository->delete($id);
        return response()->json('Deleted', 200);

     }

}
