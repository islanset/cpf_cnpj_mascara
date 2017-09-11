<?php

$num_doc = '00000000000000'; //EXEMPLO DE FORMATO DO NÚMERO

///// TRATAMENTO DO NÚMERO, POR VEZES NECESSÁRIO!
$so_num = preg_replace('/[^0-9]/','', (string) $num_doc);

///// ABAIXO FUNÇÃO PARA IDENTIFICAR E VALIDAR O NUMERO DO DOC!
if(strlen($so_num) == 11):

    require('cpf.php');
    $result = vCpf($so_num);
    $tipo_doc = 'CPF';
    $mascara = '###.###.###-##';

elseif(strlen($so_num) == 14):

    require('cnpj.php');
    $result = vCnpj($so_num);
    $tipo_doc = 'CNPJ';
    $mascara = '##.###.###/####-##';

else:

    $tipo_doc = 'CPF OU CNPJ';

endif;

///// ABAIXO FUNÇÃO DE INSTRUÇÕES SOBRE O RESULTADO!
if($result == true):

    ///// APLICANDO MASCARA DE FORMATAÇÃO!
    require('mascs.php');
    $format_str = mscs($so_num, $mascara);
    echo $tipo_doc.': '.$format_str.', É VALIDO!';

else:

    echo $tipo_doc.' INVÁLIDO!';

endif;

?>