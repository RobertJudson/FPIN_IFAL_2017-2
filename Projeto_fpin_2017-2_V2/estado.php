<!DOCTYPE html>
<?php include("conecta.php") ?>
<?php $estado = $_GET['p'] ?>
<html>

<head>
    <title>WikiLítica</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <?php include("menu.php") ?>
    <section class="maxWidth contentEstado">
        <article class="sobre">
            <div>
                <img class="bandeiraEstado" src="img/bandeira_alagoas.jpg">
                <h1>Estado de <?php  $sql = "SELECT * FROM estado WHERE nome = $estado"; echo $estado ?></h1>
                <table>
                    <tr>
                        <?php
                            $id_estado = mysqli_fetch_array($conn->query("SELECT id_estado FROM estado WHERE nome = '$estado'"));
                            $sql = "SELECT * FROM cidade WHERE id_estado = ".$id_estado['id_estado'];
                            $resultado = $conn->query($sql);
                            $cont = 0;
                            while($row = mysqli_fetch_array($resultado)){
                                $cont ++;
                            }
                            mysqli_free_result($resultado);
                        ?>
                        <td>
                            <p><span><?php echo $cont?></span> Cidades</p>
                        </td>
                        <td>
                            <p><span>0</span> Candidatos</p>
                        </td>
                    </tr>
                </table>
            </div>
        </article>

        <nav class="cidadesEstado">
            <h2>Cidades do estado de Alagoas</h2>
            <ul>
                <?php
                    $id_estado = mysqli_fetch_array($conn->query("SELECT id_estado FROM estado WHERE nome = '$estado'"));
                    $sql = "SELECT * FROM cidade WHERE id_estado = ".$id_estado['id_estado']." ORDER BY nome";
                    $resultado = $conn->query($sql);
                    while($row = mysqli_fetch_array($resultado)){
                        //adicionar miniaturas das bandeiras
                        echo "<li><a href='?c=".$row['nome']."'>".$row['nome']."</a></li>";
                    }
                    mysqli_free_result($resultado);
                ?>
            </ul>
        </nav>
    </section>

</body>

</html>