<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getAll()
    {
        $customersList = Customer::all();

        $productsList = Product::all();

        $orders = Order::all();

        $ids = $orders->pluck('customer_id')->unique();

        $customers = Customer::whereIn('id', $ids)->get();

        return view('orders.all', compact('customers', 'customersList', 'productsList'));
    }

    public function getCustomerOrder($id)
    {
        $orders = Customer::find($id)->products()->get();

        return view('orders.order', compact('orders'));
    }

    public function addOrder(Request $request)
    {
       $order = new Order();

       $order->customer_id = $request->customers;

       $order->product_id = $request->products;

       $order->save();

       return redirect('/orders');
    }
}
