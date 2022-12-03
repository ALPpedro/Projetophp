<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div class="topo">
        <div class="texto">
            <h1>Bem Vindo a Provas Rápidas</h1>
            <h3>Confira a Resposta das questões</h3>
        </div>
    </div>
    <?php
    include "./conexao.php";

    ?>
    <?php



    $lista = array_keys($_POST);

    for ($i = 0; $i < count($lista); $i++) {

        $respostaUsuario = lcfirst($_POST[$lista[$i]]);

        $query = "SELECT * FROM questoes WHERE id =" . $lista[$i];
        $resultado = mysqli_query($conexao, $query);
        while ($linha = mysqli_fetch_array($resultado)) {
            $correta = lcfirst($linha["correta"]);
    ?>

    <div style="padding: 2rem 6rem 2rem 6rem;">
        <div>
            <p>
                <?php echo $linha["pergunta"] ?>
            </p>
        </div>
        <div>
            <div>
                <?php
            if (
                $correta == $respostaUsuario
            ) {
                ?>
                <div class="alert alert-success">

                    <p>
                        Sua resposta esta correta
                        <?php echo $_POST[$lista[$i]] . ") " . $linha[$respostaUsuario] ?>
                    </p>
                </div>
                <?php
            } else {
                ?>
                <div class="alert alert-danger">
                    <p>Sua resposta esta incorreta
                        <?php echo $_POST[$lista[$i]] . ") " . $linha[$respostaUsuario] ?>
                    </p>
                    <p>Resposta Correta:
                        <?php echo $linha["correta"] . ") " . $linha[$correta] ?>
                    </p>
                </div>
                <?php
            }
                ?>
            </div>
        </div>
    </div>

    <?php
        }
    }


    ?>
</body>

</html>