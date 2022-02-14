<?php

class conectar{
    public static function conexion (){
        $conexion=new mysqli("localhost", "root", "", "prueba01");
        $conexion->query ("SET NAMES 'utf8'");
        return $conexion;

    }
} 
?>