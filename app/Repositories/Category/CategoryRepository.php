<?php

namespace App\Repositories\Category;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Repositories\Category\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
     
    /**
     * @var Category 
     */

    protected $category;

    /**
     * PostRepository constructor
     * 
     * @param Category $category
     */

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $category = new $this->category;

        $category->category_name =  $request['category_name'];
        $category->isActive =  $request['isActive'];

        $category->save();

        return $category;
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
        $category = $this->category->find($id);
        
        $category->category_name = $request['category_name'];
        $category->isActive =  $request['isActive'];

        $category->save();

        return $category;
    }

    public function getAll()
    {
       return $this->category->get();
    }

    public function find($id)
    {
        return $this->category
            ->where('category_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $category = $this->category->find($id);
        $category->delete();

        return true;
    }
}