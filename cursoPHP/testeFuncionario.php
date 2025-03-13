<?php
    include "Funcionario.php";

    $f = new Funcionario("Pedro Cabral", 1200);
    echo("O funcionário ". $f->nome . " recebe R$ ". $f->salario . "<br /><br />");

    $f->aumentoSalario(200);
    echo("Novo salário" . $f->salario);
?>
