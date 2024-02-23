<?php
class EliminarEspaciosBlanco {
    public function eliminarEspaciosBlanco($cadena) {
        return str_replace(' ', '', $cadena);
    }
}
?>