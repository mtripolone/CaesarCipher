<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

const ROTATION_CODE = -3;

class MessageDecode extends Controller {
    function decode(Request  $request)
    {
        $messageDecode = $request->input('DecodeMessage');
        $alphabet = range('a', 'z');
        $change = array_flip($alphabet);

        for ($i = 0; $i < strlen($messageDecode); $i++) {
            if (in_array(strtolower($messageDecode[$i]), $alphabet)) {
                $ordenation = $change[strtolower($messageDecode[$i])];

                $ordenationRot = ($ordenation + ROTATION_CODE) % 26;

                if ($ordenationRot < 0) {
                    $ordenationRot += 26;
                }

                $messageDecode[$i] = ($messageDecode[$i] == strtolower($messageDecode[$i]))
                    ? $alphabet[$ordenationRot]
                    : strtoupper($alphabet[$ordenationRot]);
            }
        }
        return json_encode($messageDecode);
    }
}
