<?php
/* cbtis 89 
  programa que almacena los precios de 5 alticulos
  emiliano ruiz rosales
  3°a programacion matutino
  */
$arrayprecios1 = array (324,28,12,98,56);
$arraydescuento = array (0.10);
$arrayIVA1 = array (0.16);

$arrayprecios = array ();
$arrayIVA = array ();
$arraySubtotal = array ();
$arrayTotal = array ();
$arrayDescuentos = array ();

 $longitud = count ($arrayprecios1);

 for ($i=0; $i <$longitud ; $i++) { 
  $arraySubtotal[$i] = $arrayprecios1[$i] + $arrayIVA1[$i];
  $arrayIVA[$i] = $arrayprecios1[$i] * $arrayIVA1[$i];
  $arrayDescuentos[$i] = $arrayprecios1[$i] / $arraydescuento[$i];
  $arraySubtotal[$i] = $arrayprecios1[$i] + $arrayIVA[$i];
  
  }


  echo ("Arrego Precios <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $arrayprecios[$i];
 echo "<br>";
}

echo "<br>";

 echo (" Arrego IVA <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $arrayIVA[$i];
 echo "<br>";
}

echo "<br>";

 echo (" Arrego IVA <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $arraySubtotal[$i];
 echo "<br>";
}


echo "<br>";

 echo (" Arrego IVA <br>");
for ($i=0; $i <$longitud ; $i++) { 
 echo $arrayDescuentos[$i];
 echo "<br>";
}




?>