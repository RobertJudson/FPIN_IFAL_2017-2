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
                        <td>
                            <p><span>99</span> Cidades</p>
                        </td>
                        <td>
                            <p><span>99</span> Candidatos</p>
                        </td>
                    </tr>
                </table>
            </div>
        </article>

        <nav class="cidadesEstado">
            <h2>Cidades do estado de Alagoas</h2>
            <ul>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
                <li><a href="cidade.html">Cidade</a></li>
            </ul>
        </nav>
    </section>

</body>

</html>