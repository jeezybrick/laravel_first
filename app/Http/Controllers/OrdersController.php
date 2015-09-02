<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Avto;
use App\Customer;
use App\Repair;
use App\Order;
use Request;

class OrdersController extends Controller {


    public function index()
    {

    }

	public function create()
	{
        return view('orders.create');

	}
    
    public function success()
	{
		return view('orders.ordersuccess');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Request::all();

        $avto=new Avto($input);
        $repair= new Repair($input);
        $customer=new Customer($input);

        $avto->save();
        $repair->save();
        $customer->save();

        $order = new Order([
            'date' => $input['date'],
            'd_avto' => $avto->id,
            'd_r' => $repair->id,
            'customer_id' => $customer->id
        ]);
        $order->save();
        //  dd($avto);<--Для дебага
        return redirect('orders/ordersuccess');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
