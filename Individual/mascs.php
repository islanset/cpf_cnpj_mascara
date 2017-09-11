<?php

function mscs($st, $ms){ ///// <- INICIO DA FUNÇÃO

for($a = 0, $b = 0, $nSt = ''; $a <= strlen($ms) - 1; $a++){

    if($ms[$a] == '#'): $nSt .= $st[$b++];
    else: $nSt .= $ms[$a]; endif;};

return $nSt;}; ///// <- FIM DA FUNÇÃO

?>