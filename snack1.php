<!-- 
PHP Snack 1:
Creiamo un array ‘matches’ contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
-->

<?php 
  $matches = [
    [
      "home" => "squadra 1",
      "away" => "squadra 2",
      "p_home" => rand(1, 100),
      "p_away" => rand(1, 100),
    ],
    [
      "home" => "squadra Rossa",
      "away" => "squadra Verde",
      "p_home" => rand(1, 100),
      "p_away" => rand(1, 100),
    ],
    [
      "home" => "squadra Fiore",
      "away" => "squadra Bazooka",
      "p_home" => rand(1, 100),
      "p_away" => rand(1, 100),
    ],
  ];

?>

<h1>Risultati:</h1>

<ul>
  <?php for($inps = 0; $inps < count($matches); $inps++) {?>

    <li>
    <?php echo $matches[$inps]["home"]. " - " . $matches[$inps]["away"];?>
    |
    <?php echo $matches[$inps]["p_home"]. " - " . $matches[$inps]["p_away"];?>
    </li>

  <?php } ?>
</ul>