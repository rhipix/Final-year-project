<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Restaurant;
use App\Warehouse;

use App\Http\Requests;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validation rules to protect the application and make sure
        //values are being passed into the database.
//Server side validation- so that hackers cannot remove the validation and data
        //is continually being protected.
        $this->validate($request, array
        (
            'itemName' => 'required|max:25',
            'quantity' => 'required',
            'date' => 'required',

        ));

        $item = Warehouse::where('itemName', $request->itemName)->first();
        if (empty($item)) dd('Warehouse item not found!');
        //Quantity available in the Warehouse stock is decremented by the quantity being processed in order form.
        $item->quantityAvailable -= $request->quantity;
        $item->save();

        $restaurant = Restaurant::where('itemName', $request->itemName)->first();
        //If the item is mispelt, item will not submit.
        if (empty($restaurant)) dd('Restaurant item not found!');
        $restaurant->quantityAvailable += $request->quantity;
        $restaurant->save();


        //Requests being pulled from the Order for
        $order = new Order();
        $order->itemName = $request->itemName;
        $order->quantity = $request->quantity;
        $order->save();

        //WHERE statement which changes the value of the quantity Available in the Warehouse Stock, depending
        //on the quantity passed in the Order form.
        $item = Warehouse::where('itemName', $request->itemName2)->first();
        if (empty($item)) dd('Warehouse item not found!');
        $item->quantityAvailable -= $request->quantity2;
        $item->save();

        //WHERE statement which will change the value of the quantity in the Restaurant stock once an
        //order has been submitted.
        $restaurant = Restaurant::where('itemName', $request->itemName2)->first();
        //If the item is mispelt, item will not submit.
        if (empty($restaurant)) dd('Restaurant item not found!');
        $restaurant->quantityAvailable += $request->quantity2;
        $restaurant->save();

        //Requests being pulled from the Order form
        $order = new Order();
        $order->itemName = $request->itemName2;
        $order->quantity = $request->quantity2;
        $order->save();

        //WHERE statement which changes the value of the quantity Available in the Warehouse Stock, depending
        //on the quantity needed in the
        $item = Warehouse::where('itemName', $request->itemName3)->first();
        if (empty($item)) dd('Warehouse item not found!');
        $item->quantityAvailable -= $request->quantity3;
        $item->save();

        //If empty statement which will change the value of the quantity in the Restaurant stock once an
        $restaurant = Restaurant::where('itemName', $request->itemName3)->first();
        //If the item is mispelt, item will not submit.
        if (empty($restaurant)) dd('Restaurant item not found!');
        $restaurant->quantityAvailable += $request->quantity3;
        $restaurant->save();

        //Requests being pulled from the Order form
        $order = new Order();
        $order->itemName = $request->itemName3;
        $order->quantity = $request->quantity3;
        $order->save();

        //WHERE statement which changes the value of the quantity Available in the Warehouse Stock, depending
        //on the quantity needed in the
        $item = Warehouse::where('itemName', $request->itemName4)->first();
        if (empty($item)) dd('Warehouse item not found!');
        $item->quantityAvailable -= $request->quantity4;
        $item->save();

        //If empty statement which will change the value of the quantity in the Restaurant stock once an
        $restaurant = Restaurant::where('itemName', $request->itemName4)->first();
        //If the item is mispelt, item will not submit.
        if (empty($restaurant)) dd('Restaurant item not found!');
        $restaurant->quantityAvailable += $request->quantity4;
        $restaurant->save();

        //Requests being pulled from the Order form
        $order = new Order();
        $order->itemName = $request->itemName4;
        $order->quantity = $request->quantity4;
        $order->save();

        //WHERE statement which changes the value of the quantity Available in the Warehouse Stock, depending
        //on the quantity needed in the
        $item = Warehouse::where('itemName', $request->itemName5)->first();
        if (empty($item)) dd('Warehouse item not found!');
        $item->quantityAvailable -= $request->quantity5;
        $item->save();

        //If empty statement which will change the value of the quantity in the Restaurant stock once an
        $restaurant = Restaurant::where('itemName', $request->itemName5)->first();
        //If the item is mispelt, item will not submit.
        if (empty($restaurant)) dd('Restaurant item not found!');
        $restaurant->quantityAvailable += $request->quantity5;
        $restaurant->save();

        //Requests being pulled from the Order form
        $order = new Order();
        $order->itemName = $request->itemName5;
        $order->quantity = $request->quantity5;
        $order->save();

        {

            return redirect()->route('orders.show', $order->id);
            //redirect to the order submitted view.

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $orders = Order::all();
        return view ('orders/show', ['orders' => $orders]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
     //   $warehouse = new Warehouse();
      //  DB::table('warehousestock')->decrement('quantityAvailable', $request->quantity);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
