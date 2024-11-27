<?php

namespace App\Http\Responses;

class CustomerResponse
{
    public static function success(string $message)
    {
        return [
            'status' => 'success',
            'message' => $message,
        ];
    }

    public static function error(string $message)
    {
        return [
            'status' => 'error',
            'message' => $message,
        ];
    }
}
