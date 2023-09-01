<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&family=Vollkorn:ital,wght@0,400;0,500;0,600;0,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <form action="" method=get>
    <h1>Calculadora</h1>
    <div class="inputs">
        <input type="number" name="num1" required placeholder="Ingrese primer número">        
        <input type="number" name="num2" required placeholder="Ingrese segundo número">
    </div>
        
        <fieldset><legend>Operaciones</legend>            
                <div class="opcion">
                    <input type="radio" name="accion" value="suma" id="1">
                    <label for="1">Suma</label>
                </div>
                <div class="opcion">
                    <input type="radio" name="accion" value="resta" id="2">
                    <label for="2">Resta </label>
                </div>            
                <div class="opcion">
                    <input type="radio" name="accion" value="division" id="3">
                    <label for="3">Division</label>
                </div>
                <div class="opcion">
                    <input type="radio" name="accion" value="multiplicacion" id="4">
                    <label for="4">Multiplicacion</label>
                </div>            
        </fieldset>
        <input type="submit" name="calcular" value="calcular">
        </form>
        
        <?php
        if(isset($_GET['calcular'])){
            $num1= $_GET['num1'];
            $num2= $_GET['num2'];
            $accion= $_GET['accion'];
            echo'<div class="resultado">';
            switch($accion){
            case 'suma': echo 'La suma de '.$num1.' + '.$num2.' es: '.($num1+$num2); break;
            case 'resta': echo 'La resta de '.$num1.' - '.$num2.' es: '.($num1-$num2); break;
            case 'division':{
            if($num2==0){
            echo 'Es imposible dividir por el numero 0';
            }else
            echo 'La division de '.$num1.' ÷ '.$num2.' es: '.($num1/$num2); break;}
            case 'multiplicacion': echo 'La multiplicacion de '.$num1.' * '.$num2.' es: '.($num1*$num2); break;
            default : echo 'Debe seleccionar una accion'; break;
            echo'</div>';
        }
        }
        ?>  
</body>
</html>