<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de formulário</title>
</head>
<body>
    <div class="container">
    <h1>RESTAURANT</h1>
    <form action="exercicio5.php" method="post">
        <input type="text" name="Time1" id="Time1" placeholder="Insira o nome do Time">
        <input type="number" name="gols1" id="gols1" min= "0" step="1.00" placeholder="gols" >
        <input type="text" name="Time2" id="Time2" placeholder="Insira o nome do Time">
        <input type="number" name="gols2" id="gols2" min= "0" step="1.00" placeholder="gols" >
        
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
    </form>
    </div>
</body>
</html>
<style>
    .container{
    width:400px;
    padding: 20%;
    border: 1px solid black;
    display: flex;
    flex-direction: column;
    margin: 10px auto;
}
form{
        display: flex; align-items: center;
        justify-content: center; flex-direction: column;
     }
     form input{
        width: 300px;    padding: 10px;
        margin-top:10px ;
     }
</style>