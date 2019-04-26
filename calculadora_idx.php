<?php

require_once "classes/Calculadora.php";

if ($_POST) {

    $calculadora = new Calculadora();

    $primeiroNumero = $_POST['primeiroNumero'];
    $segundoNumero = $_POST['segundoNumero'];
    $operador = $_POST['operacao'];

    $calculadora->setPrimeiroNumero($primeiroNumero);
    $calculadora->setSegundoNumero($segundoNumero);
    $calculadora->setOperador($operador);
    $calculadora->setResultado();

}

?>
<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calculadora</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
              crossorigin="anonymous">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="page-header">
                <h1>Calculadora</h1>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="primeiroNumero">Primeiro Número</label>
                            <input type="number" id="primeiroNumero" name="primeiroNumero" 
                                   class="form-control" step="any"
                                   value="<?php echo ($_POST) ? $calculadora->getPrimeiroNumero() : ''; ?>">
                        </div>
                        <div class="form-group">
                            <label for="segundoNumero">Segundo Número</label>
                            <input type="number" id="segundoNumero" name="segundoNumero" 
                                   class="form-control" step="any"
                                   value="<?php echo ($_POST) ? $calculadora->getSegundoNumero() : ''; ?>">
                        </div>
                        <div class="radio">
                            Operação:<br>
                            <label><input type="radio" name="operacao" value="+"
                                    <?php echo ($_POST && $calculadora->getOperador() == '+') 
                                    ? 'checked="checked"' : ''; ?>> Somar</label>

                            <label><input type="radio" name="operacao" value="-"
                            <?php echo ($_POST && $calculadora->getOperador() == '-') 
                                    ? 'checked="checked"' : ''; ?>> Subtrair</label>

                            <label><input type="radio" name="operacao" value="*"
                                    <?php echo ($_POST && $calculadora->getOperador() == '*') 
                                    ? 'checked="checked"' : ''; ?>> Multiplicar</label>

                            <label><input type="radio" name="operacao" value="/"
                                    <?php echo ($_POST && $calculadora->getOperador() == '/') 
                                    ? 'checked="checked"' : ''; ?>> Dividir</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <span><?php echo ($_POST) ? $calculadora->getResultado() : ''; ?></span>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>

    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
                crossorigin="anonymous"></script>
    </body>
</html>