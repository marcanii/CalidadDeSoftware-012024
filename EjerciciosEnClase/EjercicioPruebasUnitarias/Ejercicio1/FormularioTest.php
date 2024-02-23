<?php
use PHPUnit\Framework\TestCase;
require 'Formulario.php';

class FormularioTest extends TestCase
{
    public function testValidarNombreVacio() {
        $formulario = new Formulario();
        $this->assertEquals("El nombre no puede estar vacio", $formulario->ValidarNombre(""));
    }
    public function testValidarNombreMenosDe3Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("El nombre debe tener al menos 3 caracteres", $formulario->ValidarNombre("ab"));
    }
    public function testValidarNombreMasDe30Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("El nombre no puede tener mas de 30 caracteres", $formulario->ValidarNombre("holaholaholaholaholaholaholaholahola"));
    }
    public function testValidarNombreValido() {
        $formulario = new Formulario();
        $this->assertEquals("Nombre valido", $formulario->ValidarNombre('Israel'));
    }

    public function testValidarCorreoVacio() {
        $formulario = new Formulario();
        $this->assertEquals("El correo no puede estar vacio", $formulario->ValidarCorreo(""));
    }
    public function testValidarCorreoMenosDe7Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("El correo debe tener al menos 7 caracteres", $formulario->ValidarCorreo("a@b.c"));
    }
    public function testValidarCorreoMasDe20Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("El correo no puede tener mas de 20 caracteres", $formulario->ValidarCorreo("holaholaholahola100@gmail.com"));
    }
    public function testValidarCorreoNoValido() {
        $formulario = new Formulario();
        $this->assertEquals("El correo no es valido", $formulario->ValidarCorreo("hola@hola"));
    }
    public function testValidarCorreoValido() {
        $formulario = new Formulario();
        $this->assertEquals("Correo valido", $formulario->ValidarCorreo("israel10@gmail.com"));
    }

    public function testValidarContrasenaVacia() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña no puede estar vacia", $formulario->ValidarContrasena(""));
    }
    public function testValidarContrasenaMenosDe5Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña debe tener al menos 5 caracteres", $formulario->ValidarContrasena("abel"));
    }
    public function testValidarContrasenaMasDe16Caracteres() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña no puede tener mas de 16 caracteres", $formulario->ValidarContrasena("holaquetalatodoscomoestan"));
    }
    public function testValidarContrasenaSinMayuscula() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña debe tener al menos una mayuscula", $formulario->ValidarContrasena("israelmarcani"));
    }
    public function testValidarContrasenaSinMinuscula() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña debe tener al menos una minuscula", $formulario->ValidarContrasena("ISRAELMARCANI"));
    }
    public function testValidarContrasenaSinNumero() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña debe tener al menos un numero", $formulario->ValidarContrasena("IsraelMarcani"));
    }
    public function testValidarContrasenaSinCaracterEspecial() {
        $formulario = new Formulario();
        $this->assertEquals("La contraseña debe tener al menos un caracter especial", $formulario->ValidarContrasena("IsraelMarcani1"));
    }
    public function testValidarContrasenaValida() {
        $formulario = new Formulario();
        $this->assertEquals("Contraseña valida", $formulario->ValidarContrasena("IsraelMarcan1!"));
    }
}
?>