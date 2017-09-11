Validação de CPF e CNPJ em PHP - Extra Mascara

||||| Sobre o código da pasta Individual:

      É um código para aplicação individual, com todas
      as condições necessárias para validar o CPF ou o
      CNPJ, coloquei uma função extra de mascara.

||||| Sobre o código da pasta Otimizado:

      O código das funções estão otimizado para evitar
      repetição de if, pois já que a função geralmente
      é chamada com inlude ou require, é prudutivo que
      se evite fazer if repetidamente.

      Coloquei um arquivo base.php, explicando legal a
      estrutura para uma validação em arquivo único, e
      apenas informando o número do documento, seja um
      CPF ou CNPJ ele vai identificar o tipo do doc, e
      requerir a função a ser usada para validar.
      
||||| Sobre a lógica:

      1 - Tratar o número do doc, remover mascara.
      2 - Verificar quantidade de caracteres.
      3 - Verificar se é sequencial.
      4 - Cálculo de verificação.

||||| Sobre a função de mascara:

      Você pode usar a função para todo tipo que seja,
      como telefone, cep, cpf, cnpj, data, hora, veja
      alguns exemplos:

      HORA: 
        mscs(123243, '##:##:##'); 
        // 12:32:43

      DATA:
        mscs(01102017, '##/##/####');
        // 01/10/2017

      FONE:
        mscs(11980000000, '(##)#####-####'); 
        // (11)98000-0000

      ALFANÚMERICO:
        mscs('BR1001A', '##|####-#');
        // BR|1001-A

||||| Espero que lhe ajude, sucesso no seu projeto :D
