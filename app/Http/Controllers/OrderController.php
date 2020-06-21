<?php

namespace App\Http\Controllers;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Model\Order;
use App\Repositories;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function create(Request $request)
    {
        $order = $this->orderRepository->create($request);
        return response()->json(['order'=>$order], 201);
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
        $order = $this->orderRepository->update($id, $request);
        return response()->json(['order'=>$order], 201);
    }


    public function getAll()
    {
        $order = $this->orderRepository->getAll();
        return response()->json(['order'=>$order], 201);
    }

    public function findId($id)
    {
        $order = $this->orderRepository->find($id);
        return response()->json(['order'=>$order], 201); 
    }

    public function delete($id)
    {
        $this->orderRepository->delete($id);
       return response()->json('Deleted', 200);

    }
}
