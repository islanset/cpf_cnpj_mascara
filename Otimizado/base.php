<?php

///// MODELO DE CAPTAÇÃO DO NÚMERO DO DOCUMENTO!

//$num_doc = '00.000.000/0000-00'; //CNPJ COM MASCARA
//$num_doc = '00000000000000'; //CNPJ SÓ NÚMERO
//$num_doc = '000.000.000-00'; //CPF COM MASCARA
//$num_doc = '00000000000'; //CPF SÓ NÚMERO
//$num_doc = $_GET['i']; //INFORMADO NO LINK - URL
//$num_doc = $_POST['i']; //RECEBENDO DE FORMULÁRIO
//$num_doc = $variavel; //ARMAZENADO EM OUTRA VARIÁVEL

// DICA: OTIMIZE, SE JÁ TEM UM GET, POST OU VARIÁVEL,
//       TROQUE $num_doc POR $_GET['i'], $_POST['i']
//       OU $variavel, NO CAMPO DE TRATAMENTO E APAGUE
//       A LINHA DE EXEMPLO, $num_doc.

$num_doc = '00.000.000/0000-00'; //EXEMPLO, VEJA SUA NECESSIDADE

///// TRATAMENTO DO NÚMERO, REMOVENDO QUALQUER MASCARA!
$so_num = preg_replace('/[^0-9]/','', (string) $num_doc);

///// ABAIXO FUNÇÃO PARA IDENTIFICAR E VALIDAR O NUMERO DO DOC!
if(strlen($so_num) == 11):

    require('cpf.php'); //CHAMA A FUNÇÃO DE CPF OTIMIZADA
    $result = vCpf($so_num); //EXECUTA A FUNÇÃO
    //$tipo_doc = 'CPF'; //OPCIONAL, CASO QUEIRA IDENTIFICAR

elseif(strlen($so_num) == 14):

    require('cnpj.php'); //CHAMA A FUNÇÃO DE CNPJ OTIMIZADA
    $result = vCnpj($so_num); //EXECUTA A FUNÇÃO
    //$tipo_doc = 'CNPJ'; //OPCIONAL, CASO QUEIRA IDENTIFICAR

else:

    // ESCREVA SUAS INSTRUÇÕES SE DIGITAÇÃO ERRADA

endif;

///// ABAIXO FUNÇÃO DE INSTRUÇÕES SOBRE O RESULTADO!
if($result == true):

    // ESCREVA SUAS INSTRUÇÕES SE NÚMERO CORRETO

else:

    // ESCREVA SUAS INSTRUÇÕES SE NÚMERO INVÁLIDO

endif;

?>