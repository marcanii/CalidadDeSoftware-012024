<?php
class AreaCirculo {
    public function calcularArea($radio) {
        if ($radio <= 0) {
            return 0;
        }
        return round(pi() * pow($radio, 2), 2);
    }
}
?>