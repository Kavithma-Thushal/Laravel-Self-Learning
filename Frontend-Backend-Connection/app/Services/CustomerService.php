<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use Exception;

class CustomerService
{
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function save(array $data)
    {
        try {
            $this->customerRepository->save($data);
        } catch (Exception $e) {
            info($e);
        }
    }
}
