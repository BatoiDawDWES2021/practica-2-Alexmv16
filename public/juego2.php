<?php

if(isset( $_SESSION['anyadirParaules'])){
      
      $arrayParaules=unserialize( $_SESSION['anyadirParaules']);

}else{
  $arrayParaules=$diccionari;
  $_SESSION['anyadirParaules']=serialize($arrayParaules);

}
 //Añadir las palabras al diccionario
 $arrayParaules=unserialize($_SESSION['anyadirParaules']);
$aleatori=unserialize($_SESSION['aleatori']);
$i=($_SESSION['i']);
echo $i;

     if (isset($_POST['resetAfegir'])) {
         unset($_SESSION['anyadirParaules']);}

    if(isset($_POST['submitAfegir'])){
      $valencia = $_REQUEST['valencia'];
      $angles = $_REQUEST['angles'];
       $arrayParaules[$valencia]=$angles;
       $_SESSION['anyadirParaules']=serialize($arrayParaules);
       
     }
     var_dump(unserialize($_SESSION['anyadirParaules']));

if(isset($_POST['resetJoc'])){

   unset($_SESSION['respuestas']);
   $aleatori=triaParaules(unserialize($_SESSION['anyadirParaules']), 5);
   foreach ($aleatori as $palabra) {
     $respuestas[$palabra]=null;
   }
   $_SESSION['respuestas']=serialize($respuestas);
   $_SESSION['aleatori']=serialize($aleatori);
   $_SESSION['i']=0;
   
}

if(isset($_POST['submitJoc'])){
$palabra=$aleatori[$i];
$i++;
$_SESSION['i']=$i;
 $respuestas=unserialize($_SESSION['respuestas']);
 $respuestas[$palabra]=$_POST['question'];
 $_SESSION['respuestas']=serialize($respuestas);
 if ($i==5) {
     foreach ($respuestas as $key => $value){
       
       if ($aleatori[$key]==$value) {

         $cont++;
       }
     }

  }
}
