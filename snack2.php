<!-- 
PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
-->

<?php 

  $data = $_GET;

  //check presenza dei valori
  if( empty($data["name"]) || empty($data["email"]) || empty($data["age"]) ){
    echo "<h3>Errore, non tutti i paramentri sono passati</h3>";
  }
  //check name
  elseif(strlen($data["name"]) <= 3){
    echo "<h3>Accesso negato name </h3>";
  }
  //check email
  elseif(strpos($data["email"], "@") === false || strpos($data["email"], ".") === false ){
    echo "<h3>Accesso negato email</h3>";
  }
  //check age
  elseif( !is_numeric($data["age"])){
    echo "<h3>Accesso negato age</h3>";
  }else{
    echo "<h3>Accesso riuscito. Benvenuto!!!</h3>";
  }
?>





