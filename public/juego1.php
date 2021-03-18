<?php

//calcular media
    
      if(isset($_POST['resetMedia'])){
        
        unset($_SESSION['numeros']);
      }
      if (isset($_POST['submitMitjana'])) {

        $numero=$_REQUEST['numero'];
     
             if ($numero>=0 ) {
    
              if (is_null($_SESSION['numeros'])) {
               
                $arrayNumeros[]=$numero;
                $_SESSION['numeros']=serialize($arrayNumeros);
    
              }else{
                $arrayNumeros=unserialize($_SESSION['numeros']);
               $arrayNumeros[]=$numero;
                $_SESSION['numeros']=serialize($arrayNumeros);
              }
     
           }else{
            
            $media=mitjana(unserialize($_SESSION['numeros']));
           }
         
      
          }