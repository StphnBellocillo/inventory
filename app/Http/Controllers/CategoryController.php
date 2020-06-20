<?php

namespace App\Http\Controllers;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Model\Category;
use App\Repositories;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $category = $this->categoryRepository->create($request);
        return response()->json(['category'=>$category], 201);
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
        $category = $this->categoryRepository->update($id, $request);
        return response()->json(['category'=>$category], 201);
    }


    public function getAll()
    {
        $category = $this->categoryRepository->getAll();
        return response()->json(['category'=>$category], 201);
    }

    public function findId($id)
    {
        $category = $this->categoryRepository->find($id);
        return response()->json(['category'=>$category], 201); 
    }

    public function delete($id)
    {
        $this->categoryRepository->delete($id);
       return response()->json('Deleted', 200);

    }
}
