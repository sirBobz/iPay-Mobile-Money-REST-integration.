<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Cashier;
use Exception;

class InitiatePaymentController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
    	try 
    	{
		   $cashier = new Cashier();
		   return $response = $cashier
			    ->usingVendorId('ecml', 'edgecityk58d8e8dd')
			    ->withCallback('http://yourcallback.com')
			    ->withCustomer('0721553678', 'demo@example.com', false)
			    ->transact(1, 'your order id', 'your order secret');

			//return view('response', compact('response'));

    	} catch (Exception $e) {
    		
    	}

    }
}
