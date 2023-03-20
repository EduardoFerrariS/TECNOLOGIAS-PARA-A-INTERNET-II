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
        #nome:focus,#cpf:focus, #date:focus{
            background-color: #ddd;
        }
        #nome,#cpf,.btn,#date{
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

    </style>
</head>
<body>
    <h1>Formulario usuario</h1>
    <form action="exercicio5.php" method="POST" class="formcal">

        <fieldset>
            <legend>cadastro de usuario</legend>
            <label for="nome">Digite o nome </label>
            <input type="text" id="nome" name="nome">
            <label for="cpf">Digite o cpf</label>
            <input type="text" id="cpf" name="cpf">
            <label for="date">nascimento</label>


<input type="date" id="date" name="date" >

            <input type="submit" value="enviar" class="btn">


            <output>  
            <div class="resultado">

            <?php
function validar_nome($nome)
{
    if (preg_match("/^([a-zA-Z' ]+)$/",$nome) and strlen($nome)>5)
    return 1;
    else
    return 0;
}

function validar_cpf($cpf)
{
    if(preg_match("/^([1-9' ]+)$/",$cpf) and strlen($cpf)>1)
    return 1;
    else
    return 0;

}

?>


<?php

if( $_POST['nome']!=null && $_POST['cpf']!=null    && $_POST['date']!=null) {
    $nome= $_POST['nome'];
    $cpf=$_POST['cpf'];
    $date=$_POST['date'];
    if(validar_nome($nome)==1 and validar_cpf($cpf)==1 ){
    echo "<br> dados cadastrados com sucesso";
    echo "<br>Nome: ".$nome;
    echo "<br> cpf: ".$cpf;
    echo "<br> data: ".$date;
    
}
else
echo "dados incorretos...";
}
else
 echo "dados não preenchidos  "

?>
</div>

            </output>

		</select>
        </fieldset>
    </form>



</body>


</html>
