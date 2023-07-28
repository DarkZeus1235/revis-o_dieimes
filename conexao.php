<?php
        
        $host = "localhost";
        $usuario = "JP";
        $senha = "julianacarla1";
        $banco = "revisao_dieimes";

        $mysqli = new mysqli($host, $usuario, $senha, $banco);
        if ($mysqli->connect_errno){
            echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }else


    ?>