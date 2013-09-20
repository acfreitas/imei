<?php

class Imei {

    /**
     * Método para gerar um IMEI válido e aleatório
     * Gera 14 dígitos aleatórios. Destes 14, multiplica os pares por 2 e soma todos os dígitos 
     * O resultado da soma acima deve ser divisível por 10, 
     * então pega a diferença que falta para ser divisível por 10 e gera o 15º dígito, tendo um IMEI válido
     * @return type $imei
     */
    public static function imeiRandom() {
        $code = RandomHelper::intRandom(14);
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
     * Gera um inteiro aleatória, passando o tamanho da como parâmentro
     * @param type $size
     * @return $int
     */
    public static function intRandom($size) {
        $validCharacters = utf8_decode("123456789");
        $validCharNumber = strlen($validCharacters);
        $int = '';
        while (strlen($int) < $size) {
            $index = mt_rand(0, $validCharNumber - 1);
            $int .= $validCharacters[$index];
        }
        return $int;
    }

}
