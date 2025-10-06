<?php
// $_POST guarda os dados quando enviados por POST
// $_SERVER guarda dados do servidor e da requisição
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // (echo) imprime na pagina, podemos usar html dentro do php
    echo "<h1>Compos Enviados por POST</h1>";
    // $_POST guarda os dados quando enviados por POST
    // adicionamos as variaveis fora de aspas("") e separando os com o ponto (.)
    // atribuimos o valor da varial entre chaves [nome do id]
    echo "Nome: " . $_POST['nome'] . "<br>";
    echo "Semestre atual: " . $_POST['semestre'] . "<br>";
    
    $semestreAtual = $_POST['semestre'];
    $totalSemestre = 6;
    $semestreFaltam = $totalSemestre - $semestreAtual;

    echo "Faltam  " . $semestreFaltam . " semestre(s)<br>";
    echo "Tabuada do: " . $_POST['numeroEscolhido'] . "<br>";


    if (isset($numeroEscolhido)) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$tabuada = $numeroEscolhido x $i = " . ($numeroEscolhido * $i) . "<br>";
    }
    } else {
     echo "Digite um número!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Card com os resultados do Formulário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text">Nome: <?= $nome ?> </p>
                <p class="card-text">Semestre atual: <?= $nome ?> </p>
                <p class="card-text">Semestre(s) que faltam : <?= $nome ?> </p>
                <p class="card-text">Tabuada do número:<?= $numeroEscolhido ?> </p>
                <p class="card-text"> <?= $tabuada ?> </p>
            </div>
        </div>
        
    </body>
</html> 