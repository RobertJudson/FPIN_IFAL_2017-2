<!DOCTYPE html>
<?php include("conecta.php") ?>

<html lang="pt-br">
<head>
    <title>WikiLítica</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <meta charset="utf-8">
</head>

<body>
    <?php include("menu.php") ?>
    <section class="maxWidth contentIndex">
        <article class="sobre">
            <div>
                <h1>WikiLítica</h1>
                <h2>Uma bandeja de tipos e os embaralhou para fazer um livro.</h2>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos
                    de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens
                    de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos
                    de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
            </div>
        </article>

        <nav class="estadosIndex">
            <h2>Resultados por estado</h2>
            <ul>
                <?php
                    $sql = "SELECT * FROM estado ORDER BY nome";
                    $resultado = $conn->query($sql);
                    while($row = mysqli_fetch_array($resultado)){
                        //adicionar miniaturas das bandeiras
                        echo "<li><a href='candidatos.php?p=".$row['nome']."'>".$row['sigla']."</a></li>";
                    }
                    mysqli_free_result($resultado);
                ?>
            </ul>
        </nav>
    </section>
        
    <section id="cidade" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('cidade', 'none')">X</span>
            <h1>Cadastrar nova cidade</h1>
            <form class="loginForm" action="cadastra_cidade.php" method="post">
                <input type="text" placeholder="Nome da cidade" name="cidade" required/>
                <select name="estados">
                    <?php
                        $sql = "SELECT * FROM estado ORDER BY nome";
                        $resultado = $conn->query($sql);
                        while($row = mysqli_fetch_array($resultado)){
                            echo "<option value='".$row['id_estado']."'>".$row['nome']."</option>";
                        }
                        mysqli_free_result($resultado);
                    ?>
                </select>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
    
    <section id="candidato" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('candidato', 'none')">X</span>
            <h1>Cadastrar novo candidato</h1>
            <form class="loginForm" action="cadastra_candidato.php" method="post">
                <select name="cidades">
                    <?php
                        $sql = "SELECT * FROM cidade ORDER BY nome";
                        $resultado = $conn->query($sql);
                        while($row = mysqli_fetch_array($resultado)){
                            echo "<option value='".$row['id_cidade']."'>".$row['nome']."</option>";
                        }
                        mysqli_free_result($resultado);
                    ?>
                </select>
                <input type="text" placeholder="Nome do candidato" name="candidato" required/>
                <select name="sexo">
                    <option value="" disabled selected>Sexo</option>
                    <option value="m">Masculino</option>
                    <option value="f">Feminino</option>
                </select>
                <input type="date" placeholder="Data de nascimento" name="nascimento" required/>
                <input type="text" placeholder="Naturalidade" name="naturalidade" required/>
                <input type="text" placeholder="Profissão" name="profissao" required/>
                <input type="text" placeholder="Partido Atual" name="partido" required/>
                <input type="text" placeholder="Número" name="numero" required/>
                <input type="text" placeholder="Cargo a que concorre" name="cargo" required/>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <section id="estado" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('estado', 'none')">X</span>
            <h1>Cadastrar nova cidade</h1>
            <form class="loginForm" action="cadastra_estado.php" method="post">
                <input type="text" placeholder="Nome do estado" name="nome" required/>
                <input type="text" placeholder="Sigla do estado" name="sigla" required/>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>
    
    <!-- <section id="estado" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('estado', 'none')">X</span>
            <h1>Cadastrar nova cidade</h1>
            <form class="loginForm" action="cadastra_estado.php" method="post">
                <input type="text" placeholder="Nome do estado" name="nome" required/>
                <input type="text" placeholder="Sigla do estado" name="sigla" required/>
                <p>foto da cidade (anexo)</p>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <section id="cidade" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('cidade', 'none')">X</span>
            <h1>Cadastrar nova cidade</h1>
            <form class="loginForm" action="cadastra_cidade.php" method="post">
                <input type="text" placeholder="Nome da cidade" name="cidade" required/>
                <select name="estados">
                    <option value="estado">Estado</option>
                    <option value="estado">Estado</option>
                    <option value="estado">Estado</option>
                    <option value="estado">Estado</option>
                </select>
                <p>foto da cidade (anexo)</p>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <section id="candidato" class="modal">
        <div id="box" class="box">
            <span id="closeModal" onclick="modal('candidato', 'none')">X</span>
            <h1>Cadastrar novo candidato</h1>
            <form class="loginForm" action="cadastra_cidade.php" method="post">
                <select name="cidades">
                    <option value="cidade">Cidade</option>
                    <option value="cidade">Cidade</option>
                    <option value="cidade">Cidade</option>
                    <option value="cidade">Cidade</option>
                </select>
                <input type="text" placeholder="Nome do candidato" name="candidato" required/>
                <input type="text" placeholder="Sexo" name="sexo" required/>
                <!-- Idade aparece de acordo com o calculo da data de nascimento --
                <input type="text" placeholder="Data de nascimento" name="nascimento" required/>
                <input type="text" placeholder="Naturalidade" name="naturalidade" required/>
                <input type="text" placeholder="Profissão" name="profissao" required/>
                <input type="text" placeholder="Partido Atual" name="partido" required/>
                <input type="text" placeholder="Número" name="numero" required/>
                <input type="text" placeholder="Cargo a que concorre" name="cargo" required/>
                <p>foto do candidato (anexo)</p>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <script>
        function modal(id, info) {
            document.getElementById(id).style.display = info;
        }
    </script> -->

</body>

</html>