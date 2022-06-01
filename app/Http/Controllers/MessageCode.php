<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

const ROTATION_CODE = +3;

class MessageCode extends Controller{
    function code(Request $request)
    {
        $messageCode = $request->input('CodeMessage');
        $alphabet = range('a', 'z');
        $change = array_flip($alphabet);

        for ($i = 0; $i < strlen($messageCode); $i++) {
            if (in_array(strtolower($messageCode[$i]), $alphabet)) {
                $ordenation = $change[strtolower($messageCode[$i])];

                $ordenationRot = ($ordenation + ROTATION_CODE) % 26;

                if ($ordenationRot < 0) {
                    $ordenationRot += 26;
                }

                $messageCode[$i] = ($messageCode[$i] == strtolower($messageCode[$i]))
                    ? $alphabet[$ordenationRot]
                    : strtoupper($alphabet[$ordenationRot]);
            }
        }
        return json_encode($messageCode);
    }
}

