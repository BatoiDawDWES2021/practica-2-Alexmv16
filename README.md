# repositoriBasic

 * Estructura de directoris bàsica
   
    * public
    * tests
    * templates
    * helpers
    * .docker

 
 * dominis:
    * batoi2021.my
    * phpmyadmin.my
 
 * contrasenya php root: root
 
 per funcionar: 
  
  * Obrir terminal i executar 
  
    > sh start.sh
    
    > sh composer.sh
    
  
  * Per finalitzar, executar
    
    > sh stop.sh 

  * Per executar test, amb màquina apagada executar
    
    > sh test.sh 
    
    
  Practica 2
  
  * Partint del repositori actual es preten:
    
  * La pàgina **index.php** té tres formularis
    
    * El primer que **calcula la mitjana** de una sèrie de numeros ( cal comprovar que siguen numeros) introduïts per teclat i on, a priori, 
        el programa no sap quants números s'introduiran. L'usuari indicarà que ha acabat quan pose un número negatiu. Hi haurà un botó per tornar a començar.
    
    * El segon ha de mostrar una a una, 5 paraules a l'atzar d'un minidiccionari anglès-valencià, inclós a config/diccionari.php. 
    El programa demanarà que l'usuari tecleje la traducció a l'anglès de cada una de les paraules i comprovarà si són correctes. 
    Al final el programa haurà de mostrar cuantes respostes són vàlides i quantes errònees. Hi haurà un botó per tornar a començar.
     
    * El tercer és per afegir paraules al diccionari, mentres la sessió siga vàlida. Hi haurà un botó per esborrar les noves paraules.                            
 
    * Per a poder jugar l'usuari ha d'estar loguejat (en cas contrari, quan es polse en algun formulari, es durà a la pàgina de login.php).
    
    * Quan l'usuari està loguejat es mostra el seu nom a la capçalera, amb un botó de logout
  
  * La pàgina **login.php** serà un formulari amb usuari i contrasenya. Els usuaris vàlids estàn al fitxer
  config/usuaris.php. Si l'usuari és vàlid redirigirà a la pàgina index.php. En cas contrari mostrarà missatge d'error
  i mantenint el nom de l'usuari, tornarà a intentar. Després de 3 intents fallits esborrarà el nom de l'usuari del formulari.
  
  * La pàgina de logout buidarà les variables de sessió i redigirirà a index.php
  
  * Es demanen, al meyns tres funcions que estan tipificades al fitxer myHelpers.php
  
    
   
