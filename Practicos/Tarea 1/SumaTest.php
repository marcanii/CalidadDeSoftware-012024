<?php

use PHPUnit\Framework\TestCase;

require_once 'Suma.php';

class SumaTest extends TestCase {
    public function testSumar() {
        $miSuma = new Suma();
        $resultado = $miSuma->sumar(2, 2);
        $this->assertEquals(5, $resultado);
    }
}
?>