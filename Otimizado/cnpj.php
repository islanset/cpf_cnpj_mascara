<?php

function vCnpj($cnpj){ ///// <- INICIO DA FUNÇÃO

if($cnpj == str_repeat(substr($cnpj,0,1),14)): return false;

else:

    for ($a = 0, $b = 5, $sm = 0; $a < 12; $a++){
        $sm += $cnpj{$a} * $b; $b = ($b == 2) ? 9 : $b - 1;};

    $rst = $sm % 11;

    if ($cnpj{12} != ($rst < 2 ? 0 : 11 - $rst)):
        return false; endif;

    for ($a = 0, $b = 6, $sm = 0; $a < 13; $a++){
        $sm += $cnpj{$a} * $b; $b = ($b == 2) ? 9 : $b - 1;};

    $rst = $sm % 11;

    return $cnpj{13} == ($rst < 2 ? 0 : 11 - $rst);

endif;}; ///// <- FIM DA FUNÇÃO

?>