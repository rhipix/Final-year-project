<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ApplicationController extends Controller

//This allows for every view to be protected; you can only see the data if you are logged in.
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //These are functions that will return each view to the users.

    public function getHome()
    {
        return view('home/show');
    }

    public function getOrders()
    {
        return view ('orders/create');
    }

    public function showOrders()
    {
        return view ('orders/show');
    }

    public function getRestaurantStock()
    {
        return view ('restaurantstock/show');
    }

    public function getWarehouseStock()
    {
        return view ('warehousestock/show');
    }

    public function getReports()
    {
        return view ('reports.show');
    }

    public function getSuppliers()
    {
        return view ('suppliers/create');
    }


    public function getContactWarehouse()
    {
        return view('email.contact');
    }

    public function postContactWarehouse(Request $request)
    {
        //Validation rules to make sure a valid email address is being entered
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10']);

        $data = array (
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message
        );

        Mail::send('emails.contact', $data, function($message){
            $message->from();
            $message->to();
            $message->subject();


        });


    }


}
