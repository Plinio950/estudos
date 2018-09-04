<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Funcoes</title>
<style>
    h2{
        font-size: 20px;
    }

</style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2>Valores recebidos: $v1 e $v2</h2>"; //Valores adicionados no link
        echo "O valor absoluto de $v2 e " . abs ($v2);  // Valor sem sinal negativo
        echo "<br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2); // Potenciacao (sup utilizado em html para elevar um caracter
        echo "<br> A raiz quadrada de $v1 e " .sqrt($v1); //Raiz quadrada do valor
        echo "<br> O valor de $v2 arrendodado e " . round($v2); //Arredonda valores (ceil arredonda pra cima) (floor arredonda pra baixo)
        echo "<br> A parte inteira de $v2 e " . intval($v2); //Mostra a parte inteira
        echo "<br> O valor de $v1 em moeda e R$" . number_format($v1, 2); //Coloa em formato monetario -adiciona 2 casa decimais -adiciona um separador
     ?>
</div>
</body
</html>