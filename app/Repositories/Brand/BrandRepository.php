<?php

namespace App\Repositories\Brand;

use Illuminate\Http\Request;
use App\Model\Brand;
use App\Repositories\Brand\BrandRepositoryInterface;

class BrandRepository implements BrandRepositoryInterface
{
     
    /**
     * @var Brand 
     */

    protected $brand;

    /**
     * PostRepository constructor
     * 
     * @param Brand $brand
     */

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $brand = new $this->brand;

        $brand->brand_name =  $request['brand_name'];
        $brand->isActive =  $request['isActive'];

        $brand->save();

        return $brand;
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
        $brand = $this->brand->find($id);
        
        $brand->brand_name = $request['brand_name'];
        $brand->isActive =  $request['isActive'];

        $brand->save();

        return $brand;
    }

    public function getAll()
    {
       return $this->brand->get();
    }

    public function find($id)
    {
        return $this->brand
            ->where('brand_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $brand = $this->brand->find($id);
        $brand->delete();

        return true;
    }
}