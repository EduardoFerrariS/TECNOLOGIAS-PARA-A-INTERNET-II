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
        #nome:focus,#email:focus, #password:focus{
            background-color: #ddd;
        }
        #nome,#email,.btn,#password{
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
        #nome{
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Formulario usuario</h1>
    <form action="exercicio3.php" method="POST" class="formcal">

        <fieldset>
            <legend>cadastro de usuario</legend>
            <label for="nome">Digite o nome </label>
            <input type="text" id="nome" name="nome">
            <label for="email">Digite o email</label>
            <input type="email" id="email" name="email">
            <label for="senha">Digite sua senha:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="enviar" class="btn">
            <output>  
            <div class="resultado">
<?php
if( $_POST['nome']!=null && $_POST['email']!=null && $_POST['password']!=null){
    $nome= $_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['password'];
    echo "<br> dados cadastrados com sucesso";
    echo "<br>Nome: ".$nome;
    echo "<br> Email: ".$email;
    echo "<br> Senha: ".$senha;
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
