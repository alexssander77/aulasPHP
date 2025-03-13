<?php
    include_once "Funcionario.php";

    class Professor extends Funcionario{//subclass
        var $disciplina;
        public function_construct($n, $s, $d){
            parent::_construct($n, $s);
            $this->disciplina = $d;
        }
        public function setDisciplina($disciplina){
            $this->disciplina = $disciplina;
        }
        static function teste(){
            return "Método de classe";
        }

    }
?>
