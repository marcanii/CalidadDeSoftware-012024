<?php
use PHPUnit\Framework\TestCase;
require_once 'NumeroPrimo.php';

class NumeroPrimoTest extends TestCase{
    public function testEsPrimoPositivo7() {
        $numeroPrimo = new NumeroPrimo();
        $this->assertTrue($numeroPrimo->esPrimo(7));
    }
    public function testEsPrimoNoPrimo6() {
        $numeroPrimo = new NumeroPrimo();
        $this->assertFalse($numeroPrimo->esPrimo(6));
    }
    public function testEsPrimoNegativoMenos3() {
        $numeroPrimo = new NumeroPrimo();
        $this->assertFalse($numeroPrimo->esPrimo(-3));
    }
    public function testEsPrimoGrande997() {
        $numeroPrimo = new NumeroPrimo();
        $this->assertTrue($numeroPrimo->esPrimo(997));
    }
    public function testEsPrimoCero() {
        $numeroPrimo = new NumeroPrimo();
        $this->assertFalse($numeroPrimo->esPrimo(0));
    }
}
?>