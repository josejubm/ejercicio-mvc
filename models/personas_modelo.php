<?php
class personas_modelo{
    private $bd;
    private $personas;

    public function __construct()
    {
        $this->bd =Conectar::conexion();
        $this->personas=array();
     }
    
     public function get_personas(){
         $consulta=$this->bd->query("select * from personas");

            while($filas =$consulta ->fetch_assoc()){
                $this->personas[]=$filas;
             }
             return $this->personas;             
     }
     
}


?>