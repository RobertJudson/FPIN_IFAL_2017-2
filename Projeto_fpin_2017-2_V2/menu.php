<?php include('conecta.php') ?>
<nav id="menu" class="menuIndex">
    <a href="index.php"><img src="img/logo.png"></a>
    <!-- !!! fazer area de pesquisa !!! -->
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="candidatos.php">Candidatos</a></li>
        <li><a id="signupButton" onclick="modal('candidato', 'flex')">CANDIDATO</a></li>
        <li><a id="signupButton" onclick="modal('estado', 'flex')">ESTADO</a></li>
        <li><a id="signupButton" onclick="modal('cidade', 'flex')">CIDADE</a></li>
        <li><a id="signupButton" onclick="modal('signup', 'flex')">Cadastrar</a></li>
        <li><a id="loginButton" onclick="modal('login', 'flex')">Acessar</a></li>
    </ul>
</nav>

<!-- modal login e signup -->

<section id="login" class="modal">
    <div id="box" class="box">
        <span id="closeModal" onclick="modal('login', 'none')">X</span>
        <h1>Acesse sua conta</h1>
        <form class="loginForm" action="">
            <input type="text" placeholder="Usuario" name="username" required/>
            <input type="password" placeholder="Senha" name="password" required />
            <button type="submit">Entrar</button>
            <div><span>Novo? <a class="signup" onclick="">Cadastre-se</a></span><a class="forgot" href="#">Esqueci a senha!</a></div>
        </form>
    </div>
</section>

<section id="signup" class="modal">
    <div id="box" class="box">
        <span id="closeModal" onclick="modal('signup', 'none')">X</span>
        <h1>Cadastrar nova conta</h1>
        <form class="loginForm" action="">
            <input type="email" placeholder="E-mail" name="email" required/>
            <input type="text" placeholder="Usuario" name="newUsername" required/>
            <input type="password" placeholder="Senha" name="newPassword" required />
            <input type="password" placeholder="Confirme sua senha" name="newPassword" required />
            <button type="submit">Cadastrar</button>
            <div><span>Já possui conta? <a class="signup" onclick="">Clique aqui!</a></span></div>
        </form>
    </div>
</section>

<!-- outros modals de cadastro -->
        
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

<script>
    function modal(id, info) {
        document.getElementById(id).style.display = info;
    }
</script>