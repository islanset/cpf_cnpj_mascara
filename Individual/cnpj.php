<?php

function vCnpj($cnpj){ ///// <- INICIO DA FUNÇÃO

$acnpj = preg_replace('/[^0-9]/','', (string) $cnpj);

if(strlen($acnpj) == 14):

    if($acnpj == str_repeat(substr($acnpj,0,1),14)): return false;

    else:

        for ($a = 0, $b = 5, $sm = 0; $a < 12; $a++){
            $sm += $acnpj{$a} * $b; $b = ($b == 2) ? 9 : $b - 1;};

        $rst = $sm % 11;

        if ($acnpj{12} != ($rst < 2 ? 0 : 11 - $rst)):
            return false; endif;

        for ($a = 0, $b = 6, $sm = 0; $a < 13; $a++){
            $sm += $acnpj{$a} * $b; $b = ($b == 2) ? 9 : $b - 1;};

        $rst = $sm % 11;

        return $acnpj{13} == ($rst < 2 ? 0 : 11 - $rst); endif;

else: return false; endif;}; ///// <- FIM DA FUNÇÃO

?>