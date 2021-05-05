<?php
include "../database/bd.php";
include "./head.php";

$_SESSION['usuario'] = null;

$obj = new bd();

if (!empty($_POST)) {
    $objUsuario = $obj->logar($_POST['login'], $_POST['senha']);
    if (!empty($objUsuario)) {
        $_SESSION['usuario'] = $objUsuario;
        header("Location: ./UsuarioList.php");
    } else {
        echo "<p>Login ou Senha errado, tente novamente!</p>";
    }
}
?>
<br />

<body>
    <h2>Bem vindo, informe suas credênciais</h2>
    <form action="LoginForm.php" method="post">
        <div class="col-3">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" require id="login" placeholder="Usuario"><br>
        </div>
        <div class="col-3">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" require placeholder="******">
            <br>

            <button class="btn btn-success" type="submit">Entrar</button>
        </div>
    </form>

</body>

</html>
<?php
include "./footer.php";
?>