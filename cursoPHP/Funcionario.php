<?php
class Funcionario{
    var $nome, $salario;

    /*function Funcionario($n,$salario){
        $this->nome = $n;
        $this->salario = $s;
    }*/
    function __construct($n, $s){
        $this->nome = $n;
        $this->salario = $s;
    }
    function aumentoSalario($valor){
        $this->salario += $valor;
    }
}
?>
