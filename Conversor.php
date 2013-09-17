<?php 
 
	$cantidad_a_convertir = 100; 
	$paises = array ("Mexico","Estados Unidos"); 
	$tasa = array (12.30); 

echo $cantidad_a_convertir." En Moneda Estadounidense convertidos en Peso Mexicano:      
<br />"; 
for ($i=0; $i<1; $i++) 
echo $paises[$i]." ".$tasa[$i]*$cantidad_a_convertir."<br />"; 




?>