<?php

require_once ("models/personas_modelo.php");
$per=new personas_modelo();
$datos=$per->get_personas();

///llamar la vista
 require_once("views/personas_vista.php");

 ?>
