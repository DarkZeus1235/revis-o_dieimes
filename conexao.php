<?php
        
        $hostname = "localhost";
        $bancodedados = "revisao_dieimes";
        $usuario = "JP";
        $senha = "julianacarla1";

        $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
        if ($mysqli->connect_errno){
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }else


    ?>