<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Sliding Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/styles/login.css" />
</head>

<body>


    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Já tem uma conta?</h2>
                <button class="signinBtn">Fazer login</button>
            </div>
            <div class="box signup">
                <h2>Ainda não tem uma conta?</h2>
                <button class="signupBtn">Se registre</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="logarConta.php" method="POST">
                    <h3>Login</h3>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="usuarioOuEmail" />
                        <label for="floatingInput">Usuário ou Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="senha" name="logSenha"/>
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <input type="submit" value="Entrar" />
                    <a href="index.php" class="forgot">Voltar para página inicial</a>
                </form>
            </div>

            <div class="form signupForm">
                <form action="salvarConta.php" method="POST">
                    <h3>Registrar</h3>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="usuário" name="usuario">
                        <label for="floatingInput">Usuário</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="tipoConta" name="tipoConta">
                            <option value="Usuario">Usuário</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                        <label for="tipoConta">Tipo de conta</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="senha" placeholder="senha" name="senha">
                        <label for="senha">Senha</label>
                    </div>

                    <input type="submit" value="Registrar" />
                    <a href="index.php" class="forgot">Voltar para página inicial</a>
                </form>
            </div>
        </div>
    </div>

    <script>
        const signinBtn = document.querySelector(".signinBtn");
        const signupBtn = document.querySelector(".signupBtn");
        const formBx = document.querySelector(".formBx");
        const body = document.querySelector("body");

        signupBtn.onclick = function () {
            formBx.classList.add("active");
            body.classList.add("active");
        };
        signinBtn.onclick = function () {
            formBx.classList.remove("active");
            body.classList.remove("active");
        };
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>