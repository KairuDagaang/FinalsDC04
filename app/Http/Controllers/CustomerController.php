<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::orderBy('name')->get();
        return response()->json($customers);
    }

    public function view(Customer $customer) {
        return response()->json([
            'status' => 'OK',
            'data' => $customer->load('sales'),
        ]);
    }
}
