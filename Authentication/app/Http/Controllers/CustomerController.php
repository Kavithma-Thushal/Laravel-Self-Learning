<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        Customer::create($request->only('name', 'address', 'salary'));
        return response()->json(['message' => 'Customer saved successfully!'], 201);
    }
}
