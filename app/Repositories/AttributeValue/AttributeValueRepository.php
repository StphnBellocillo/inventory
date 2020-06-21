<?php

namespace App\Repositories\AttributeValue;

use Illuminate\Http\Request;
use App\Model\AttributeValue;
use App\Repositories\AttributeValue\AttributeValueRepositoryInterface;

class AttributeValueRepository implements AttributeValueRepositoryInterface
{
     
    /**
     * @var AttributeValue 
     */

    protected $attributeValue;

    /**
     * PostRepository constructor
     * 
     * @param AttributeValue $attributeValue
     */

    public function __construct(AttributeValue $attributeValue)
    {
        $this->attributeValue = $attributeValue;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $attributeValue = new $this->attributeValue;

        $attributeValue->attribute_value_name = $request['attribute_value_name'];
        $attributeValue->isActive =  $request['isActive'];

        $attributeValue->save();

        return $attributeValue;
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
        $attributeValue = $this->attributeValue->find($id);
        
        $attributeValue->attribute_value_name = $request['attribute_value_name'];
        $attributeValue->isActive =  $request['isActive'];

        $attributeValue->save();

        return $attributeValue;
    }

    public function getAll()
    {
       return $this->attributeValue->get();
    }

    public function find($id)
    {
        return $this->attributeValue
            ->where('attribute_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $attributeValue = $this->attributeValue->find($id);
        $attributeValue->delete();

        return true;
    }
}