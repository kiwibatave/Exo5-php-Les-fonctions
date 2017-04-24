<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8" />
  <link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
  <?php
     function exo1() {
       return True;
     }
?>
  <p><?php
    function exo2($var){
      echo $var;
     }
     exo2($var ="Je suis Ben");
 ?></p>
  <p><?php
    function exo3($prenom, $bonjour){
      echo $prenom . $bonjour;
    }
    exo3("Benoit","Hello");
   ?></p>
   <p><?php
      function exo4($nombre1, $nombre2) {
        if ($nombre1 > $nombre2) {
          echo "Le premier nombre est plus grand";
        }
        else if ($nombre1 < $nombre2) {
          echo "Le premier nombre est plus petit";
        }
        elseif ($nombre1 = $nombre2) {
          echo "les deux nombres sont identiques";
        }
      }
      exo4(2,2);
    ?></p>
    <p><?php
        function exo5($string, $chiffre){
          echo $string . $chiffre;
        }
        exo5(50, " nuances de gray");
    ?></p>
    <p><?php
        function exo6($nom, $nom2, $age){
          echo "Bonjour ", $nom. " ", $nom2. " , tu as ", $age. " ans.";
        }
        exo6("Cuz", "Ben", 5);
    ?></p>
    <p><?php
        function exo7($old, $genre){
          if ($old > 18 AND $genre =="Homme"){
            echo "Vous êtes un homme et vous êtes majeur";
          }
          elseif ($old < 18 AND $genre == "Homme"){
            echo "Vous êtes un homme et vous êtes mineur";
          }
          elseif ($old > 18 AND $genre =="Femme"){
            echo "Vous êtes une femme et vous êtes majeur";
          }
          elseif ($old < 18 AND $genre =="Femme"){
            echo "Vous êtes une femme et vous êtes mineur";
          }
        }
          exo7(17, "Femme");
    ?></p>
    <p><?php
        $num = 7;
        $num1 = 10;
        $num2 = 3;
        function exo8($num, $num1, $num2){
          echo $num+$num1+$num2;
        }
        exo8($num, $num1, $num2);
    ?></p>
</body>
</html>
