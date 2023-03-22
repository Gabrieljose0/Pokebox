<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id_pokemon = $_POST['id_pokemon'];
        $cd_pokemon = $_POST['cd_pokemon'];
        $nm_pokemon = $_POST['nm_pokemon'];
        $ds_tipo1 = $_POST['ds_tipo1'];
        $ds_tipo2 = $_POST['ds_tipo2'];
        $url_img = $_POST['url_img'];
        
        $sqlInsert = "UPDATE tb_pokemon 
        SET id_pokemon='$id_pokemon', nm_pokemon='$nm_pokemon',ds_tipo1='$ds_tipo1',ds_tipo2='$ds_tipo2', url_img='$url_img'
        WHERE cd_pokemon=$cd_pokemon";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: index.php');

?>