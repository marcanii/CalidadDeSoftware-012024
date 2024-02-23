<?php
class NumeroPrimo {
    public function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
}
?>