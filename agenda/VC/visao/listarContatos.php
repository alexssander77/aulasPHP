<HTML>
    <HEAD>
        <TITLE> Lista de contatos </TITLE>
        <META charset="utf-8"/>
    </HEAD>
    <BODY>
        <?php
           include_once "../controle/controleListar.php";

        ?>
        <H1> Lista de Contatos</H1>
        <UL>
            <?php
                foreach($contato as $i=>$nome){
                    $i++;
                    echo "<LI> Contato n? $i : $nome </LI>" ;
                }
            ?>
        </UL>
    </BODY>
</HTML>    

