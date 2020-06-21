<?php

namespace App\Repositories\Product;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
     
    /**
     * @var Product 
     */

    protected $product;

    /**
     * PostRepository constructor
     * 
     * @param Product $product
     */

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $product = new $this->product;
        $product->product_name =  $request['product_name'];
        $product->sku =  $request['sku'];
        $product->price =  $request['price'];
        $product->qty =  $request['qty'];
        $product->description =  $request['description'];
        $product->color =  $request['color'];
        $product->size =  $request['size'];
        $product->brands =  $request['brands'];
        $product->category =  $request['category'];
        $product->store =  $request['store'];
        $product->availability =  $request['availability'];
        $product->isActive =  $request['isActive'];

        $product->save();

        return $product;
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
        $product = $this->product->find($id);
        
        $product->product_name =  $request['product_name'];
        $product->sku =  $request['sku'];
        $product->price =  $request['price'];
        $product->qty =  $request['qty'];
        $product->description =  $request['description'];
        $product->color =  $request['color'];
        $product->size =  $request['size'];
        $product->brands =  $request['brands'];
        $product->category =  $request['category'];
        $product->store =  $request['store'];
        $product->availability =  $request['availability'];
        $product->isActive =  $request['isActive'];

        $product->save();

        return $product;
    }

    public function getAll()
    {
       return $this->product->get();
    }

    public function find($id)
    {
        return $this->product
            ->where('product_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $product = $this->product->find($id);
        $product->delete();

        return true;
    }
}