<?php
use PHPUnit\Framework\TestCase;
require_once 'OcurrenciaSubcadena.php';

class OcurrenciaSubcadenaTest extends TestCase {
    public function testOcurrenciaSubcadenaVacio() {
        $ocurrenciaSubcadena = new OcurrenciaSubcadena();
        $this->assertEquals(0, $ocurrenciaSubcadena->ocurrenciaSubcadena('', ''));
    }
    public function testOcurrenciaSubcadenaSinOcurrencias() {
        $ocurrenciaSubcadena = new OcurrenciaSubcadena();
        $this->assertEquals(0, $ocurrenciaSubcadena->ocurrenciaSubcadena('hola', 'adios'));
    }
    public function testOcurrenciaSubcadenaUnaOcurrencia() {
        $ocurrenciaSubcadena = new OcurrenciaSubcadena();
        $this->assertEquals(1, $ocurrenciaSubcadena->ocurrenciaSubcadena('buen dia inge', 'ia'));
    }
    public function testOcurrenciaSubcadenaMultiplesOcurrencias() {
        $ocurrenciaSubcadena = new OcurrenciaSubcadena();
        $this->assertEquals(6, $ocurrenciaSubcadena->ocurrenciaSubcadena('buen dia a todos aaaa', 'a'));
    }
    public function testOcurrenciaSubcadenaOcurrenciasSuperpuestas() {
        $ocurrenciaSubcadena = new OcurrenciaSubcadena();
        $this->assertEquals(3, $ocurrenciaSubcadena->ocurrenciaSubcadena('holaholahola', 'ola'));
    }
}
?>