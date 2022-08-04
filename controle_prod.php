<?php
    $cod_P= filter_input(INPUT_GET,'cod_p');
    $desc_p= filter_input(INPUT_GET,'desc_p');
    $valor_p= filter_input(INPUT_GET,'valor_p');
    $quant_p= filter_input(INPUT_GET, 'quant_p');
    $pgt= filter_input(INPUT_GET,'pgt');

    $botao= filter_input(INPUT_GET, '$enviar');

    include_once 'compra.php';
    $compra= new compra();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></p>
    <p>Código do produto <?php echo $cod_P;?></p>
    
    <p>Valor total: <?php echo $compra-> valor_total($quant_p, $valor_p,$pgt);?></p>
</body>
</html>