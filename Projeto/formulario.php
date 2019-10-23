<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo</title>
    <link rel="stylesheet" href="css/recibo.css">
</head>
<body>
    <div style="align-itens: center;">
        <div style="margin-top: 20vh">
            <img src="img/positivo.png" width="150" height="150">
            <h2 class="title">Reserva concluída</h2>
            <br>
            <h3 class="title">Recibo Gerado</h3>
            <br>
            <a href="index.php">
                <input type=image src="img/voltar.png" width="50" height="50">
            </a>
        </div>   
    </div>
</body>
</html>

<?php

function recibo($nome, $preco, $produtos, $pagamento){        

    $formatedItens = "";
    $total = 0;
    for ($i=0; $i < count($preco); $i++) { 
        if ($preco[$i] != 0) {
            $formatedItens .= "\t" . $produtos[$i] . " : " . "R$" . number_format($preco[$i], 2, ',', '.') ."\r\n";
            $total = $total + $preco[$i]; 
        }
    }

    $totalDesconto = ($pagamento == "Dinheiro") ? $total * 0.85 : $total * 0.95;
    $desconto = $total - $totalDesconto;


    $arquivo = fopen("Recibo.txt","w");
    $texto = "Nome: " . $nome . "\r\n";
    $texto .= "Data: ".formatedDateNow() . "\r\n";
    $texto .= "Itens \r\n" . $formatedItens . "\r\n"; 
    $texto .= "Pagamento: " . $pagamento . "\tDesconto: R$" . number_format($desconto, 2, ',', '.') . "\r\n";
    $texto .= "Total: R$" . number_format($totalDesconto, 2, ',', '.') . "\r\n";
    $texto .= "Validade: " . formatedDateNow(1);
    fwrite($arquivo, $texto);
}
function formatedDateNow($validade=0) {
    $formatado = "";
    $dia = date('d');
    $index = date('m');
    $ano = date("Y");
    $validade = ($validade > 11) ? $validade - 11 : $validade;
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    $formatado = "Jundiaí, ". $dia . " de " . $meses[$index-1+$validade] . " de " . $ano;
    return $formatado;
}


    $itens = array("Óculos", "Pranchas", "Fixação", "Capacete", "Roupas", "Bota");
    date_default_timezone_set('America/Sao_Paulo');


    $nome = (isset($_GET["user_nome"])) ? $_GET["user_nome"] : 0;
    $item1 = (isset($_GET["item1"])) ? intval($_GET["item1"]) : 0;
    $item2 = (isset($_GET["item2"])) ? intval($_GET["item2"]) : 0;
    $item3 = (isset($_GET["item3"])) ? intval($_GET["item3"]) : 0;
    $item4 = (isset($_GET["item4"])) ? intval($_GET["item4"]) : 0;
    $item5 = (isset($_GET["item5"])) ? intval($_GET["item5"]) : 0;
    $item6 = (isset($_GET["item6"])) ? intval($_GET["item6"]) : 0;

    $pay = (isset($_GET["user_modo"])) ? $_GET["user_modo"] : 0;
    $value = array($item1, $item2, $item3, $item4, $item5, $item6 );
    
   recibo($nome, $value, $itens, $pay);
?>