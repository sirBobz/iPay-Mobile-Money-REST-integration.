<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Cashier;
use Exception, Log;

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
    /**
     * create a payment initiation method
     *
     * @return void
     */
    public function index(Request $request){
    	try 
    	{
           $cashier = new Cashier();

		   echo $response = $cashier
			    ->usingVendorId('ecml', 'edgecityk58d8e8dd')
			    ->withCallback($callback)
			    ->withCustomer($telephone, $email, false)
			    ->transact($amount, $orderId, $invoiceNumber);

			//return view('response', compact('response'));

    	} catch (Exception $e) {
    	   
           Log::error($e);
    	}

    }
}
