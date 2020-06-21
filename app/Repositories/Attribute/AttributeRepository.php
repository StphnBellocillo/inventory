<?php

namespace App\Repositories\Attribute;

use Illuminate\Http\Request;
use App\Model\Attribute;
use App\Repositories\Attribute\AttributeRepositoryInterface;

class AttributeRepository implements AttributeRepositoryInterface
{
     
    /**
     * @var Attribute 
     */

    protected $attribute;

    /**
     * PostRepository constructor
     * 
     * @param Attribute $attribute
     */

    public function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $attribute = new $this->attribute;

        $attribute->attribute_name =  $request['attribute_name'];
        $attribute->attribute_value = $request['attribute_value'];
        $attribute->isActive =  $request['isActive'];

        $attribute->save();

        return $attribute;
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
        $attribute = $this->attribute->find($id);
        
        $attribute->attribute_name = $request['attribute_name'];
        $attribute->attribute_value = $request['attribute_value'];
        $attribute->isActive =  $request['isActive'];

        $attribute->save();

        return $attribute;
    }

    public function getAll()
    {
       return $this->attribute->get();
    }

    public function find($id)
    {
        return $this->attribute
            ->where('attribute_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $attribute = $this->attribute->find($id);
        $attribute->delete();

        return true;
    }
}