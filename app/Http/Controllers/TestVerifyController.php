<?php

namespace App\Http\Controllers;

class TestVerifyController extends Controller
{
    public function testVerify()
    {
        return response()->json([
            'test' => 'ok'
        ]);
    }
}
