<!DOCTYPE html>
<html lang="pt-br   ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>
    <?php
    $time1 = $_POST['Time1'] ;
    $time2 = $_POST['Time2'];
    $gols1 = $_POST['gols1'];
    $gols2 = $_POST['gols2'];

    if($gols1>$gols2){
        echo "$time1 venceu a partida ($gols1 X $gols2 $time2)";
    }else if($gols1<$gols2){
        echo "$time2 venceu a partida ($gols2 X $gols1 $time1)";
    }else if($gols1=$gols2){
        echo "A partida terminou em empate ($time1 $gols1 X $gols2 $time2)";
    }?>
</body>
</html>