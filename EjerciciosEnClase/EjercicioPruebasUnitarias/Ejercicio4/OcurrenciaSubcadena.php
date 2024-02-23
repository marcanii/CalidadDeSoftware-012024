<?php
class OcurrenciaSubcadena {
    public function ocurrenciaSubcadena($cadena, $subcadena) {
        if ($cadena == '' || $subcadena == '') {
            return 0;
        }
        return substr_count($cadena, $subcadena);
    }
}
?>