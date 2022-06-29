<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Functions;
class MessageDecode extends Controller
{
    public const ROTATION_CODE = -3;

    function decode(Request  $request)
    {
        return json_encode(
            Functions::cypher(
                $request->input('CodeMessage'),
                self::ROTATION_CODE
            )
        );
    }
}
