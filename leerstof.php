<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br/>
      <center>
    <h1><?php


      //Dit is mijn eerste code
      //Variables
      echo "Hello world!";
      $first_name = "Sylvana";
      $favorite_number = 41;
      $last_name = $first_name;

     ?>
   </h1>
   </center>




   <br/>
     <center>
   <h1><?php


     //Math Operators
     //     + - * / ** %

     $num_1 = 41;
     $num_2 = 3;

     echo $num_1 % $num_2;
     echo "<br>";
     echo ++$num_1;


    ?>
  </h1>
  </center>




  <br/>
    <center>
  <h1><?php

    // 2 dingen samenvoegen

    $first_name = "Sylvana";
    $last_name = "Groen";

    echo $first_name . " " . $last_name;

   ?>
 </h1>
 </center>





 <br/>
   <center>
 <h1><?php

   // Comparison Operators
   /*
      == Equal To
      != Not Egual
      >  Greater Than
      <  Less Than
      >= Greater Than or Equal To
      <= Less Than or Equal To
    */

    $num_1 = 41;
    $num_2 = 4;
    $first_name = "Sylvana";

    var_dump ($num_1 <= $num_2);
    var_dump ($first_name == "Sylvana");


  ?>
</h1>
</center>




<br/>
  <center>
<h1><?php

  // Escape Characters

  echo "And then she said: \"You're ugly\"";
  echo "<br>";
  echo "And then she said: 'Hello'";
 ?>
</h1>
</center>






<br/>
  <center>
<h1><?php

  // If Else statements
  /*if(something is true){
    do something;
  }
  */

  $first_name = "Sylvana";
  $last_name = "Groen";
  $num_1 = 40;
  $num_2 = 5;

  if ($first_name == "Sylvana"){
    echo "Hoi " . $first_name . "! Hoe gaat het?";
  } else {
    echo "Jij bent Sylvana niet, wie ben jij?";
  }

  echo "<br/>";

  if($num_1 > 50){
    echo $num_1 . " is groter dan 30";
  } else{
    echo $num_1 . " is kleiner dan 50";
  }

  echo "<br/>";

  if($num_1 > 100){
    echo $num_1 . " is groter dan 100";
  }elseif ($num_2 == 5) {
    echo $num_2 . " is gelijk aan 5!";
  } else{
    echo $num_1 . " is kleiner dan 100";
  }


 ?>
</h1>
</center>





<br/>
  <center>
<h1><?php

  // Array - Numeric

  $last_names = array("Groen", "Hopp", "straat");
  $first_names = array("Sylvana", "41", $last_names);
  echo $first_names [2][0];


  // Arrays - Associative
  echo"<br/>";

  $fav_pizza = array(
    "Sylvana" => "Tonijn",
    "Oma" => "pittige pizza",
    "Britt" => "Pepperoni"
  );
  echo $fav_pizza ['Sylvana'];

 ?>
</h1>
</center>






<br/>
  <center>
<h1><?php

  // Loops -- While
  /* while (condition is true){
  Do something en herhaal dit continu tot het false is
  }*/

  $counter = 0;
    while ($counter < 3){
    echo "The count is: $counter<br/>";
    ++$counter;
  };
//------------------------------------------------
  //Loops -- For
  // Is het zelfde als de while loop, alleen dan in 1.

  echo"<br/>";

  for ($count = 0; $count <= 3; ++$count){
    echo "The count is $count <br/>";
  }
//-----------------------------------------------
  //Loops -- Foreach

  echo"<br/>";

  $names = array("Sylvana", "Oma", "Britt");
  $count = 0;

    foreach ($names as $value){
      echo "Naam: $value<br/>";
    }


 ?>
</h1>
</center>





<br/>
  <center>
<h1><?php

  // Funtions (php funtions website)
  /* Een functie is een programma in een programma,
    je moet hem aanspreken om te laten werken
    */

    function Zoheetdezefunctie(){
      echo "Als je hem roept krijg je dit resultaal";
    }

    Zoheetdezefunctie();
    echo "<br/>";
//------------------------------------------------
    function Hallodaar($names){
      echo "Hallo $names";
    }

    Hallodaar("Sylvana");

    echo"<br/>";
//-------------------------------------------

      function Ditiseengetal ($num_1, $num_2){
        return $num_1 + $num_2;
      }
      $answer = Ditiseengetal(40, 50);
      echo $answer * 1.1; // dit is 10%

//---------------------------------------------
 echo "<br/>";
//  Random function

  echo "Raad het nummer!<br/>";
  $nummer = 5;
  $random = mt_rand(0,10);
  if ($nummer == $random){
    echo"Je hebt gewonnen!! $nummer staat gelijk aan $random";
  } else{
    echo "Je hebt verloren $nummer staat niet gelijk aan $random";
  }

  echo "<br/>";
//-------------------------------------------

    // Date function

    $todays_day =  date("l");
    echo"Vandaag is het $todays_day";



 ?>
</h1>
</center>






<br/>
  <center>
<h1><?php

  // String manipulation

  $uitdrukking = "Sylvana is een beginner in PHP";
  $oud = "beginner";
  $nieuw = "pro";
  echo str_replace ($oud, $nieuw, $uitdrukking);
  //oud naar nieuw in uitdrukking

  echo"<br/>";

  /*strtoupper = Alles in blokletters
    ucwords = Elk woord eerst een hoofdletter
    ucfirst = Eerste woord in hoofdletter
    strtolower = Alles in kleine letters
    lcfirst = Eerste woord in kleine letter
    strlen = hpeveel karakters heeft de string(spatie teld mee)
    */

  $naam = ("sylvana groen");
  echo ucwords($naam);
  echo "<br/>";
  echo ucfirst($naam);
  echo "<br/>";
  echo strlen($naam);

 ?>
</h1>
</center>






<br/>
  <center>
<?php

  // Include function
  include("variables.php");//Hiermee stop je de file variables.php in deze file(dit doe je meestal bovenaan de file voor overzicht)
  echo "Copyright ( c )" . $company_name . " " . date("Y") . " - all rights reserved";
  

 ?>
</center>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
