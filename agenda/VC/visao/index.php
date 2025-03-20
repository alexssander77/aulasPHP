<HTML>
    <HEAD>
        <TITLE> Lista de contatos </TITLE>
        <META charset="utf-8"/>
    </HEAD>
    <BODY>
        <?php
            /*$conexao = mysqli_connect("localhost", "root","vertrigo");
            mysql_select_db("agenda",$conexao); */
            $conexao = mysqli_connect("localhost", "root","vertrigo","agenda");
            $dados = mysqli_query($conexao, "SELECT * FROM contato");

        ?>

        <UL>
            <?php
                $i=1;
                while($usuario = mysqli_fetch_array($dados)){
                    echo("<LI> Contato n° " . $i . ":" .
                    $usuario["nome"] . "</LI>");
                    $i++;
                }
            ?>
        </UL>
    </BODY>
</HTML>    

