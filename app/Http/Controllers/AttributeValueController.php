<?php

namespace App\Http\Controllers;
use App\Repositories\AttributeValue\AttributeValueRepositoryInterface;
use App\Model\AttributeValue;
use App\Repositories;


use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    private $AttributeValueRepository;

    public function __construct(AttributeValueRepositoryInterface $AttributeValueRepository)
    {
        $this->AttributeValueRepository = $AttributeValueRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $attributeValue = $this->AttributeValueRepository->create($request);
        return response()->json(['attributeValue'=>$attributeValue], 201);
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
        $attributeValue = $this->AttributeValueRepository->update($id, $request);
        return response()->json(['attributeValue'=>$attributeValue], 201);
    }


    public function getAll()
    {
        $attributeValue = $this->AttributeValueRepository->getAll();
        return response()->json(['attributeValue'=>$attributeValue], 201);
    }

    public function findId($id)
    {
        $attributeValue = $this->AttributeValueRepository->find($id);
        return response()->json(['attributeValue'=>$attributeValue], 201); 
    }

    public function delete($id)
    {
        $this->AttributeValueRepository->delete($id);
       return response()->json('Deleted', 200);

    }

}
