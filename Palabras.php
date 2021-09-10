<?php
class palabra
{

    private $texto;

    public function __construct($t)

    {
        $this->texto = $t;
    }



    private function cuentaLetras($letras)
    {

        $contador = 0;

        for($i=0; $i<strlen($this->texto); $i++) {
            if(strpos($letras, $this->texto[$i]) !== false ) {

            $contador++;
        }
    }

        return $contador;
    }

    public function contador()
    {

        $vocales = 'aeiouAEIOUáéíóúÁÉÍÓÚ';
        $consonantes = 'bcdfghjklmnñpqrstvwyzBCDFGHJkLMNÑPQRSTVWXYZ';
        $array['vocales'] = $this->cuentaLetras($vocales);
        $array['consonantes'] = $this->cuentaLetras($consonantes);
        return $array;
    }    
    
}



?>