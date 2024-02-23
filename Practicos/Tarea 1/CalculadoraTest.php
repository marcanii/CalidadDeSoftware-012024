<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculadora.php';

class CalculadoraTest extends TestCase {
    public function testSumar2y3() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->sumar(2, 3);
        $this->assertEquals(5, $resultado);
    }

    public function testRestar5y3() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->restar(5, 3);
        $this->assertEquals(2, $resultado);
    }

    public function testMultiplicar2y4() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->multiplicar(2, 4);
        $this->assertEquals(8, $resultado);
    }

    public function testDividir6y2() {
        $calculadora = new Calculadora();
        $resultado = $calculadora->dividir(6, 2);
        $this->assertEquals(3, $resultado);
    }

    public function testDividirPorCero5y0() {
        $this->expectException(InvalidArgumentException::class);

        $calculadora = new Calculadora();
        $calculadora->dividir(5, 0);
    }
}
?>