<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Operadores</title>

</head>
<body>
<div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h1>Valores recebidos: A = $n1 e B = $n2</h1>";
    $s = $n1 + $n2;
    $m = ($n1+$n2) / 2;

    echo "A soma entre vale ". ($n1+$n2);
    echo "<br> A subtracao vale ". ($n1-$n2);
    echo "<br> A multiplicacao vale ". ($n1*$n2);
    echo "<br> A divisao vale ". ($n1/$n2);
    echo "<br> O modulo vale ". ($n1%$n2);
    echo "<br> A media vale $m"
    ?>
</div>
</body
</html>