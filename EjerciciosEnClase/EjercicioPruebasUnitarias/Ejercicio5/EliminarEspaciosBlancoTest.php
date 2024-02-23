<?php
use PHPUnit\Framework\TestCase;
require_once 'EliminarEspaciosBlanco.php';

class EliminarEspaciosBlancoTest extends TestCase {
    public function testEliminarEspaciosBlancoVacio() {
        $eliminarEspaciosBlanco = new EliminarEspaciosBlanco();
        $this->assertEquals('', $eliminarEspaciosBlanco->eliminarEspaciosBlanco(''));
    }
    public function testEliminarEspaciosBlancoSinEspacios() {
        $eliminarEspaciosBlanco = new EliminarEspaciosBlanco();
        $this->assertEquals('holaaa', $eliminarEspaciosBlanco->eliminarEspaciosBlanco('holaaa'));
    }
    public function testEliminarEspaciosBlancoConEspaciosAlInicioYFinal() {
        $eliminarEspaciosBlanco = new EliminarEspaciosBlanco();
        $this->assertEquals('juancarlos', $eliminarEspaciosBlanco->eliminarEspaciosBlanco(' juancarlos '));
    }
    public function testEliminarEspaciosBlancoConEspaciosEntrePalabras() {
        $eliminarEspaciosBlanco = new EliminarEspaciosBlanco();
        $this->assertEquals('buenosdiasinge', $eliminarEspaciosBlanco->eliminarEspaciosBlanco('buenos dias inge'));
    }
    public function testEliminarEspaciosBlancoConEspaciosMulteples() {
        $eliminarEspaciosBlanco = new EliminarEspaciosBlanco();
        $this->assertEquals('holaquetal', $eliminarEspaciosBlanco->eliminarEspaciosBlanco(' h o l a  q u e  t a l '));
    }  
}
?>