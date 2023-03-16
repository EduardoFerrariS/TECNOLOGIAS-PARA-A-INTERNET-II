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
        #nome:focus,#idade:focus, #sexo:focus{
            background-color: #ddd;
        }
        #nome,#idade,.btn,#sexo{
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
    <form action="exercicio4.php" method="POST" class="formcal">

        <fieldset>
            <legend>cadastro de usuario</legend>
            <label for="nome">Digite o nome </label>
            <input type="text" id="nome" name="nome">
            <label for="idade">Digite o idade</label>
            <input type="number" id="idade" name="idade">
            <label for="sexo">escolha seu sexo</label>
            <select class="sexo" name="sexo" id="sexo">sexo:
                <option default  value="escolha">escolha</option>
                <option value="masculino">masculino</option>
                <option value="feminino">feminino</option>
            </select>
            <input type="submit" value="enviar" class="btn">
            <output>  
            <div class="resultado">
<?php
if( $_POST['nome']!=null && $_POST['idade']!=null && ($_POST['sexo']!=null) && ($_POST['sexo']!="escolha") ){
    $nome= $_POST['nome'];
    $idade=$_POST['idade'];
    $sexo=$_POST['sexo'];
    echo "<br> dados cadastrados com sucesso";
    echo "<br>Nome: ".$nome;
    echo "<br> idade: ".$idade;
    echo "<br> sexo: ".$sexo;
}
else
 echo "envio  invalido"

?>
</div>

            </output>

		</select>
        </fieldset>
    </form>



</body>


</html>
