<!-- 
PHP Snack 1:
Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
-->

<?php 
  $partite = [
    [
      "casa" => "lollo",
      "avversari" => "lalla",
      "p_casa" => rand(1, 100),
      "p_avversari" => rand(1, 100),
    ],
    [
      "casa" => "lillo",
      "avversari" => "lilla",
      "p_casa" => rand(1, 100),
      "p_avversari" => rand(1, 100),
    ],
    [
      "casa" => "lello",
      "avversari" => "lulla",
      "p_casa" => rand(1, 100),
      "p_avversari" => rand(1, 100),
    ],
  ];
?>

<h1>Partite: </h1>

<ul>
  <?php for ($i = 0; $i < count($partite); $i++) {?>
    <li>
      <?php echo $partite[$i]["casa"]. " - " . $partite[$i]["avversari"]?>
      |
      <?php echo $partite[$i]["p_casa"].  " - " . $partite[$i]["p_avversari"]?>
    </li>
  <?php } ?>
</ul>



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



