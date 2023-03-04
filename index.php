<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
    <pre>
        <?php
        require_once 'banco.php';

        $cc = new ContaBanco("10", "Corrente", "João", "50", "Fechada"); // num, tipo, nome, saldo e status

        // print_r($cc);

        $cp = new ContaBanco("5", "Poupança", "Luiz", "0", "Fechada");

        // print_r($cp);
       $cc->abrirConta();
       $cc->fecharConta();
       $cc->depositar();
       $cc->sacar();
       $cc->pagarMensal();

    //    $cp->fecharConta();
    //    $cp->depositar();
    //    $cp->sacar();
        //   $cp->pagarMensal();

              ?>
              </pre>
</body>
    </html>