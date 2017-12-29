<?php include("conecta.php") ?>

<?php include("menu.php") ?>

<section class="maxWidth contentCandidatos">
    <article class="sobre">
        <div>
            <img class="bandeira" src="img/mapabrasil.png">
            <h1>Estados brasileiros</h1>
            <h2>Selecione o estado para visualizar seus candidatos disponiveis</h2>
        </div>
    </article>

    <nav class="estadosCandidatos">
        <h2>Resultados por estado</h2>
        <ul>
            <?php
                $sql = "SELECT * FROM estado ORDER BY nome";
                $resultado = $conn->query($sql);
                while($row = mysqli_fetch_array($resultado)){
                    //adicionar miniaturas das bandeiras
                    echo "<li><a href='?p=".$row['nome']."'>(".$row['sigla'].")<br/>".$row['nome']."</a></li>";
                }
                mysqli_free_result($resultado);
            ?>
        </ul>
    </nav>
</section>