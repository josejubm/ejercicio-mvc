<!DOCTYPE html>
<html lang="en">
    <haed>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    
          
</head>
<body>
    <table>
        <tr>
            <td>Nombre</td>
            <td>Edad</td>
        </tr>
        <?php
            foreach($datos as $dato){
             echo "<tr><td>".$dato['nombre']."</td>";
             echo "<td>".$dato['edad']."</td></tr>";
             }
        ?>
    </table>
</body>
</html>
        
        
        
             
    
         
           
        





        
        
