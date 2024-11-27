<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Responses\CustomerResponse;
use App\Services\CustomerService;
use Exception;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function view()
    {
        return view('customer');
    }

    public function save(CustomerRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $this->customerService->save($validatedData);
            return response()->json(CustomerResponse::success('Customer saved successfully!'), 201);
        } catch (Exception $e) {
            return response()->json(CustomerResponse::error('Customer not saved!'), 500);
        }
    }
}
