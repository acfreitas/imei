<?php

echo imeiRandom();

/**
 * Generates IMEI code valid and random
 * Generates 14 aleatory digits. These 14, multiplies the multiples of 2 by 2 and sum the result 
 * The result Must be divisible by 10, 
 * Then get the diference and genaretes the last digit
 *
 * @return int $imei
 */
function imeiRandom() {
    $code = intRandom(14);
    $position = 0;
    $total = 0;
    while ($position < 14) {
        if ($position % 2 == 0) {
            $prod = 1;
        } else {
            $prod = 2;
        }
        $actualNum = $prod * $code[$position];
        if ($actualNum > 9) {
            $strNum = strval($actualNum);
            $total += $strNum[0] + $strNum[1];
        } else {
            $total += $actualNum;
        }
        $position++;
    }
    $last = 10 - ($total % 10);
    if ($last == 10) {
        $imei = $code . 0;
    } else {
        $imei = $code . $last;
    }
    return $imei;
}
 
/**
 * @param int $size
 * @return $int
 */
function intRandom($size) {
    $validCharacters = utf8_decode("0123456789");
    $validCharNumber = strlen($validCharacters);
    $int = '';
    while (strlen($int) < $size) {
        $index = mt_rand(0, $validCharNumber - 1);
        $int .= $validCharacters[$index];
    }
    return $int;
}
?>
