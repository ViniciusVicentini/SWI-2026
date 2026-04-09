<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <div class="text-center">
        <h1 class="fs-1">Faça Login!</h1>
        <form action="processa.php" method="POST">
            <div class="container">
                <div class="row align-items-center">
                    <div class="card">
                        <div class="card-body">
                            <div class="container-md">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email:</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" name="senha"
                                        placeholder="Password">
                                    <label for="floatingPassword">Senha:</label>
                                    <div class="text-center mt-4">
                                        <input type="submit" value="Enviar" class="btn btn-primary ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>


</body>

</html>