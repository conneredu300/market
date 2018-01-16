<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getAll()
    {
        $customers = Customer::all();

        return view('customers.all',compact('customers'));
    }

    public function addCustomerPost(Request $request)
    {
       $customer = new Customer();

       $customer->name = $request->name;

       $customer->email = $request->email;

       $customer->save();

       return redirect('/customers');
    }

    public function deleteCustomerGet(Customer $customer)
    {
        return view('customers.delete',compact('customer'));
    }

    public function deleteCustomerPost(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }

    public function updateCustomerGet(Customer $customer)
    {
        return view('customers.update',compact('customer'));
    }

    public function updateCustomerPost(Request $request,Customer $customer)
    {
        $customer->name = $request->name;

        $customer->email = $request->email;

        $customer->update();

        return redirect('/customers');
    }

    public function viewCustomer(Customer $customer)
    {
        return view('customers.view',compact('customer'));
    }
}
