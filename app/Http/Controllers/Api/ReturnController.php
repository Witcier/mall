<?php

namespace App\Http\Controllers\Api;

use App\ProductReturn;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReturnController extends Controller
{
    //
    public function getReasonReturn()
    {
        $reason_return = new ProductReturn();
        return response()->json([
            'code' => 0,
            'message' => $reason_return
        ]);
    }
}
