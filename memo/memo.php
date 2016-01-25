<?php

  // boucle
  for ($nombre = 1; $nombre <= 10; $nombre++) {
    if ($nombre <= 9) {
        echo $nombre . ", ";
    } else {
        echo $nombre . " !";
    }
  };

  // tableau !! le tableau commence a 0
  $lesChoses = array("Echanger avec les bases de donn?s",
        "Envoyer des cookies", "Evaluer les donn?s d'un formulaire",
        "Fabriquer des pages Web dynamiques");
  foreach ($lesChoses as $uneChose) {
      echo "<li>$uneChose</li>";
  }

  // unset($var); detruire une variable
  unset($uneChose);

  // shuffle($var array); melange un tableau
  shuffle($lesMots);

  //concatener
  echo "toto"."tata";

  // PHP Sensible ?la casse
  $monNom = "tibo";

  // sinon si
  if(){
  }
  elseif(){
  }
  else{
  }

  // switch case  (tjr avoir un defaut) on peut passer une variable au switch
  switch (2) {
        case 0:
            echo 'La valeur est 0';
            break;
        case 1:
            echo 'La valeur est 1';
            break;
        default:
            echo "La valeur n'est ni 0, ni 1, ni 2";
    }
    //s'?rit aussi
    switch (2) :
        case 0:
            echo 'La valeur est 0';
            break;
        case 1:
            echo 'La valeur est 1';
            break;
        default:
            echo "La valeur n'est ni 0, ni 1, ni 2";
    endswitch;

  // while
   $i = 0;
	//Ajoutez une boucle While ci-dessous
	while($i < 5) {
	    echo "n?".$i."<br>";
	    $i++;
	}

  //do while


?>
