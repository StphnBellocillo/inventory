<?php

namespace App\Http\Controllers;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Model\Product;
use App\Repositories;

use Illuminate\Http\Request;

class ProductController extends Controller
{
      private $productRepository;

      public function __construct(ProductRepositoryInterface $productRepository)
      {
          $this->productRepository = $productRepository;
      }
  
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
  
      public function create(Request $request)
      {
          $product = $this->productRepository->create($request);
          return response()->json(['product'=>$product], 201);
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
          $product = $this->productRepository->update($id, $request);
          return response()->json(['product'=>$product], 201);
      }
  
  
      public function getAll()
      {
          $product = $this->productRepository->getAll();
          return response()->json(['product'=>$product], 201);
      }
  
      public function findId($id)
      {
          $product = $this->productRepository->find($id);
          return response()->json(['product'=>$product], 201); 
      }
  
      public function delete($id)
      {
          $this->productRepository->delete($id);
         return response()->json('Deleted', 200);
  
      }
}
