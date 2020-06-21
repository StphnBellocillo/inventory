<?php

namespace App\Repositories\Order;

use Illuminate\Http\Request;
use App\Model\Order;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
     
    /**
     * @var Order 
     */

    protected $order;

    /**
     * PostRepository constructor
     * 
     * @param Order $order
     */

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function create($request)
    {
        $order = new $this->order;
        $order->customer_name =  $request['customer_name'];
        $order->customer_address =  $request['customer_address'];
        $order->customer_phone =  $request['customer_phone'];
        $order->product_name =  $request['product_name'];
        $order->qty =  $request['qty'];
        $order->rate =  $request['rate'];
        $order->amount =  $request['amount'];
        $order->gross_amount =  $request['gross_amount'];
        $order->vat =  $request['vat'];
        $order->discount =  $request['discount'];
        $order->net_amount =  $request['net_amount'];
        $order->save();

        return $order;
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
        $order = $this->order->find($id);
        
        $order = new $this->order;
        $order->customer_name =  $request['customer_name'];
        $order->customer_address =  $request['customer_address'];
        $order->customer_phone =  $request['customer_phone'];
        $order->product_name =  $request['product_name'];
        $order->qty =  $request['qty'];
        $order->rate =  $request['rate'];
        $order->amount =  $request['amount'];
        $order->gross_amount =  $request['gross_amount'];
        $order->vat =  $request['vat'];
        $order->discount =  $request['discount'];
        $order->net_amount =  $request['net_amount'];

        $order->save();

        return $order;
    }

    public function getAll()
    {
       return $this->order->get();
    }

    public function find($id)
    {
        return $this->order
            ->where('order_id', $id)
            ->get();
    }

    public function delete($id)
    {
        $order = $this->order->find($id);
        $order->delete();

        return true;
    }
}