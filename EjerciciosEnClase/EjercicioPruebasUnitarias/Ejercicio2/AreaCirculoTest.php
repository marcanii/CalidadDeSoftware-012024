<?php

use PHPUnit\Framework\TestCase;
require_once 'AreaCirculo.php';

class AreaCirculoTest extends TestCase {
    public function testCalcularAreaPositivo5() {
        $areaCirculo = new AreaCirculo();
        //$this->assertEquals(78.5441317802, $areaCirculo->calcularArea(5));
        $this->assertEquals(78.54, $areaCirculo->calcularArea(5));
    }
    public function testCalcularAreaCero() {
        $areaCirculo = new AreaCirculo();
        $this->assertEquals(0, $areaCirculo->calcularArea(0));
    }
    public function testCalcularAreaNegativoMenos3() {
        $areaCirculo = new AreaCirculo();
        $this->assertEquals(0, $areaCirculo->calcularArea(-3));
    }
    public function testCalcularAreaGrande1000() {
        $areaCirculo = new AreaCirculo();
        $this->assertEquals(3141592.65, $areaCirculo->calcularArea(1000));
    }
    public function testCalcularAreaDecimal3punto5() {
        $areaCirculo = new AreaCirculo();
        $this->assertEquals(38.48, $areaCirculo->calcularArea(3.5));
    }
}
?>