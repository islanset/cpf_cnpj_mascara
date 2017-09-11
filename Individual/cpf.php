<?php

function vCpf($cpf){ ///// <- INICIO DA FUNÇÃO

$acpf = preg_replace('/[^0-9]/','', (string) $cpf);

if(strlen($acpf) == 11):

    if($acpf == str_repeat(substr($acpf,0,1), 11)): return false;

    else:

        for($a = 9; $a < 11; $a++){

            for($b = 0, $c = 0; $c < $a; $c++){
                $b += $acpf{$c} * (($a + 1) - $c);};

            $b = ((10 * $b) % 11) % 10;

            if($acpf{$c} != $b): return false; endif;};

    return true; endif;

else: return false; endif;}; ///// <- FIM DA FUNÇÃO

?>