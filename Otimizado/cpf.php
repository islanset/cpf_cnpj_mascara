<?php

function vCpf($cpf){ ///// <- INICIO DA FUNÇÃO

if($cpf == str_repeat(substr($cpf,0,1), 11)): return false;

else:

    for($a = 9; $a < 11; $a++){

        for($b = 0, $c = 0; $c < $a; $c++){
            $b += $cpf{$c} * (($a + 1) - $c);};

        $b = ((10 * $b) % 11) % 10;

        if($cpf{$c} != $b): return false; endif;};

return true; endif;}; ///// <- FIM DA FUNÇÃO

?>