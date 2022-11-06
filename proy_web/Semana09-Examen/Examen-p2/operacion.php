<?php
$Inicial= $_POST["v_ValorIni"];
$Final= $_POST["v_ValorFin"];

while( $Inicial<$Final){ 
        if($Inicial%2==0)
        echo $Inicial=$Inicial+2; 
        echo "<br>";

}



    
?>