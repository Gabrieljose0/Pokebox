<?php
    include_once('config.php');

    if(!empty($_GET['cd_pokemon']))
    {
        $cd_pokemon = $_GET['cd_pokemon'];
        $sqlSelect = "SELECT * FROM tb_pokemon WHERE cd_pokemon=$cd_pokemon";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id_pokemon = $user_data['id_pokemon'];
                $nm_pokemon = $user_data['nm_pokemon'];
                $ds_tipo1 = $user_data['ds_tipo1'];
                $ds_tipo2 = $user_data['ds_tipo2'];
                $url_img = $user_data['url_img'];
            }
        }
        else
        {
            header('Location: index.php');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wcd_pokemonth=device-wcd_pokemonth, initial-scale=1.0">
    <title>POKEBOX</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="index.php" style="text-transform: uppercase; text-decoration:none; color:white; font-weight:bold;">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Editar Pokemon</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="id_pokemon" id="id_pokemon" class="inputUser" value=<?php echo $id_pokemon;?> required>
                    <label for="id_pokemon" class="labelInput">Colocação do Pokemon</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nm_pokemon" id="nm_pokemon" class="inputUser" value=<?php echo $nm_pokemon;?> required>
                    <label for="nm_pokemon" class="labelInput">Nome do Pokemon</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ds_tipo1" id="ds_tipo1" class="inputUser" value=<?php echo $ds_tipo1;?> required>
                    <label for="ds_tipo1" class="labelInput">Tipo do Pokemon</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ds_tipo2" id="ds_tipo2" class="inputUser" value=<?php echo $ds_tipo2;?> required>
                    <label for="ds_tipo2" class="labelInput">Tipo do Pokemon</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <!-- <input type="text" name="url_img" id="url_img" class="inputUser" value=<?php echo $url_img;?> required>
                    <label for="url_img" class="labelInput">URL da Imagem</label> -->

                    <input type="text" name="url_img" id="url_img" class="inputUser" value=<?php echo $url_img;?> required>
                    <label for="url_img" class="labelInput">URL da Imagem</label>
                </div>
                <br><br>
				<input type="hidden" name="cd_pokemon" value=<?php echo $cd_pokemon;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>