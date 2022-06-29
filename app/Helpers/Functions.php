<?php

namespace App\Helpers;

class Functions
{
    public static function cypher(string $message, int $rotationCode)
    {
        $alphabet = range('a', 'z');
        $change = array_flip($alphabet);

        $alphabetLen = 26;
        $messageLen = strlen($message);
        for ($i = 0; $i < $messageLen; $i++) {
            $messageLower = strtolower($message[$i]);
            if (!in_array($messageLower, $alphabet)) {
                continue;
            }
            $ordenation = $change[$messageLower];

            $ordenationRot = ($ordenation + $rotationCode) % $alphabetLen;

            if ($ordenationRot < 0) {
                $ordenationRot += $alphabetLen;
            }

            $message[$i] = $alphabet[$ordenationRot];
            if ($message[$i] == $messageLower) {
                $message[$i] = strtoupper($message[$i]);
            }
        }

        return $message;
    }
}
