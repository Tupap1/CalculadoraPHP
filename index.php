    <!DOCTYPE html>
    <html lang="es">
    <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Enlace de hojas de estilo de bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Enlace google fonts -->

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap"
    rel="stylesheet">

    <!--Enlace javascript para Sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <title>Taller Calculadora de PHP</title>
    </head>
    <body>
    <div class="container">
    <h1>Calculadora PHP</h1>


    <hr>


    <form method="post">
<center>
    <label>Número 1</label>
    <input type="number" max=10000 min=0 name="numero1" placeholder="0" required autofocus >
    <label>Número 2</label>
    <input type="number" max="10000" min="0" placeholder="0" name="numero2" required>
</center>
    <hr>

    <input type="radio" class="form-check-imput" name="opcion" value="sumar"
    required> Sumar

    <input type="radio" class="form-check-imput" name="opcion" value="restar"
    required> Restar

    <input type="radio" class="form-check-imput" name="opcion"
    value="multiplicar" required> Multiplicar

    <input type="radio" class="form-check-imput" name="opcion"
    value="division" required> División

    <input type="radio" class="form-check-imput" name="opcion"
    value="potenciacion" required> Potenciación

    <input type="radio" class="form-check-imput" name="opcion"
    value="concatenacion" required> Concatenación

        <hr>

    <center><input type="submit" class="btn btn-success w-25" value="Enviar" >
    <input type="reset" class="btn btn-danger w-25" value="Limpiar"></center>
    <hr>
    </form>
    </div>


    <div class="container">
        <?php
        if ($_POST){  
        function Sumar (){
            echo "La suma de los números es: ".
    ($_POST['numero1']+$_POST['numero2']);
        }  
        
        function Restar (){
            echo "La resta de los números es: ".
            ($_POST['numero1' ]-$_POST['numero2']);
        }


        function Multiplicar (){
            echo "La multiplicación de los números es:". 
            ($_POST['numero1'] * $_POST['numero2']);
        }
        
        function Division (){
            if 
                ($_POST['numero2']==0)$d="Error: division por 0";
            else
                $d=$_POST['numero1']/$_POST['numero2']; 
            echo "La division de los números es:".$d;}
            
            
        function Potenciacion (){
            echo "La potenciación de los números es:".
            (pow($_POST['numero1'], $_POST['numero2']));}
        
    
            
    function Concatenacion(){
        echo "La Concatenación de los números es: ".
        ($_POST['numero1'].$_POST['numero2']);
        }
        switch($_POST['opcion']){
        case 'sumar':
            Sumar();
            break;
        case 'restar':
            Restar();
            break;
        case 'multiplicar':
        Multiplicar();
            break;
        case 'division':
        Division();
            break;
        case 'potenciacion';
        Potenciacion();
            break;
        case 'concatenacion';
        Concatenacion();
            break;
        default:echo "Error en la opción seleccionada";
            break;}
        }
    
            ?>
            </div>
        </body>
    </html>


