<?php

namespace App\Http\Controllers;
use App\Repositories\Group\GroupRepositoryInterface;
use App\Model\Group;
use App\Repositories;


use Illuminate\Http\Request;

class GroupController extends Controller
{
    //
      //
      private $groupRepository;

      public function __construct(GroupRepositoryInterface $groupRepository)
      {
          $this->groupRepository = $groupRepository;
      }
  
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
  
      public function create(Request $request)
      {
          $group = $this->groupRepository->create($request);
          return response()->json(['group'=>$group], 201);
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
          $group = $this->groupRepository->update($id, $request);
          return response()->json(['group'=>$group], 201);
      }
  
  
      public function getAll()
      {
          $group = $this->groupRepository->getAll();
          return response()->json(['group'=>$group], 201);
      }
  
      public function findId($id)
      {
          $group = $this->groupRepository->find($id);
          return response()->json(['group'=>$group], 201); 
      }
  
      public function delete($id)
      {
          $this->groupRepository->delete($id);
         return response()->json('Deleted', 200);
  
      }
    
}
