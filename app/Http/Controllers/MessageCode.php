<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Functions;

class MessageCode extends Controller
{
    private const ROTATION_CODE = 3;
    public function code(Request $request)
    {
        return json_encode(
            Functions::cypher(
                $request->input('CodeMessage'),
                self::ROTATION_CODE
            )
        );
    }
}

