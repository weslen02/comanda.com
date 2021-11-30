<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap/css/product.css">

    <title>Comanda.com</title>
</head>

<body>

    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-start">

            <a class="p-3" href="index.php" title="Home">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
            </a>

            <a class="p-3 d-none d-md-inline-block" href="finalizados.php">Finalizados</a>

            <?php if ($exibir_tabEdit) : ?>
                <a class="p-3 d-none d-md-inline-block" href="#">Editar</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light">
        <?php if ($exibir_form) : ?>
            <div class="col-md-8 p-lg-5 mx-auto my-5">
                <?php include "formulario.php"; ?>
            </div>
        <?php endif; ?>

        <?php if ($exibir_tabAdd) : ?>
            <div class="col-md-12">
                <?php include "tab_adicionados.php"; ?>
            </div>
        <?php endif; ?>

        <?php if ($exibir_tabEdit) : ?>
            <div class="col-md-12">
                <?php include "tab_editar.php"; ?>
            </div>
        <?php endif; ?>

        <?php if ($exibir_tabFin) : ?>
            <div class="col-md-12">
                <?php include "tab_finalizados.php"; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/popper.min.js"></script>
    <script src="./bootstrap/js/holder.min.js"></script>

    <script>
        $(function() {
            $('#cancelar').click(function() {
                $(':input', '#form')
                    .not(':button, :submit, :disabled')
                    .val('')
                    .removeAttr('selected');
            });

        });
    </script>
</body>

</html>