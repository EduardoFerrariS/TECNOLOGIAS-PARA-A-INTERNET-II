<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>

    <style>
        .formcal{
            width: 250px;
            margin: 50px auto 0;
            font-family: sans-serif;

        }
        .formcal fieldset{
            background: #ccc;

        }
        .formcal label{
            margin-top: 25px;
            display: block;
            margin-bottom: 5px;
        }
        #primeiro:focus,#segundo:focus{
            background-color: #ddd;
        }
        #primeiro,#segundo,.btn,.selecao{
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 15px;
            font-size: 18px;
            border: none;
        }
        .btn{
            margin-top: 15px;

        }
        #primeiro{
            margin-bottom: 15px;
        }
        .resultado{
            box-sizing: border-box;
            background-color: white;
            font-size: 18px;
            margin-top: 10px;
            padding: 15px;
            color: green;
            width: 100%;
        
 
        }
    </style>
</head>
<body>
    <h1>Formulario calculadora</h1>
    <form action="exercicio1.php" method="POST" class="formcal">

        <fieldset>
            <legend>Calculadora</legend>
            <label for="primeiro">Digite o primeiro numero</label>
            <input type="number" id="primeiro" name="primeiro">
            <label for="segundo">Digite o segundo numero</label>
            <input type="number" id="segundo" name="segundo">
            <label for="operacao">Operação:</label>
		<select class="selecao" id="operacao" name="operacao">
			<option value="+">Adição</option>
			<option value="-">Subtração</option>
			<option value="*">Multiplicação</option>
			<option value="/">Divisão</option>
            <input type="submit" value="calcular" class="btn">
            <output>  
            <div class="resultado">
<?php
if( $_POST['primeiro']!=null && $_POST['segundo']!=null && $_POST['segundo']!=null){
	$num1 = $_POST['primeiro'];
	$num2 = $_POST['segundo'];
	$operacao = $_POST['operacao'];

    if($operacao=='+')
    $resultado=intval($num1+$num2);
    else if($operacao=='-')
    $resultado=intval($num1-$num2);
    else if($operacao=='*')
    $resultado=intval($num1*$num2);
    else
    $resultado=intval($num1/$num2);

    echo "resultado: ".$resultado;
}
else
 echo "operação invalida"

?>
</div>

            </output>

		</select>
        </fieldset>
    </form>



</body>


</html>
