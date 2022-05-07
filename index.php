<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>primer documento php</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Calculadora</h1>
                    </div>
                    <div class="panel-body">
                        <form action="" method="get">
                            <div class="form-group">
                                <label for="">Numero 1</label>
                                <input class="form-control" type="number" name="number1"><br>
                                <select class="form-control" name="opciones" id="opciones" >
                                    <option value="">Seleccione operacion</option>
                                    <option value="sumar">Sumar</option>
                                    <option value="restar">Restar</option>
                                    <option value="multi">Multiplicar</option>
                                    <option value="divi">Dividir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Numero 2</label>
                                <input class="form-control" type="number" name="number2">
                            </div>
                            <button class="btn btn-info" name="calcular">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php 
        $operaciones  = $_GET['opciones'];
        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];
        $re = 0;

        if($operaciones == 'sumar'){
            $re = $num1 + $num2;
        }
        else if($operaciones == 'restar'){
            $re = $num1 - $num2;
        }
        else if($operaciones == 'multi'){
            $re = $num1 * $num2;
        }
        else if($operaciones == 'divi'){
            $re = $num1 / $num2;
        }
        

    ?>
            <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-success">
                    El resultado del calculo es:<strong> <?php print($re); ?></strong>
                </div>
            </div>
        </div>
    </div>
</body>
</html>