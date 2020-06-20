<?php

namespace App\Repositories\Group;

use Illuminate\Http\Request;
use App\Model\Group;
use App\Repositories\Group\GroupRepositoryInterface;

class GroupRepository implements GroupRepositoryInterface
{
     
    /**
     * @var Group 
     */

    protected $group;

    /**
     * PostRepository constructor
     * 
     * @param Group $group
     */

    public function __construct(Group $group)
    {
        $this->group = $group;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $group = new $this->group;

        $group->group_name =  $request['group_name'];
        $group->isActive =  $request['isActive'];

        $group->save();

        return $group;
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
        $group = $this->group->find($id);
        
        $group->group_name = $request['group_name'];
        $group->isActive =  $request['isActive'];

        $group->save();

        return $group;
    }

    public function getAll()
    {
       return $this->group->get();
    }

    public function find($id)
    {
        return $this->group
            ->where('group_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $group = $this->group->find($id);
        $group->delete();

        return true;
    }
}