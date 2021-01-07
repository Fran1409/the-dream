

<?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);
   //gvar_dump($_POST);

   if (isset($_POST["submit"])){
      $exhangerate = 0.2053;
      $currency = $_POST["currency"];
      if ($currency == "LEI"){
         echo $_POST["amount"] . " lei is " . round($_POST["amount"]*$exhangerate, 2) . " euros."; 
      } else if ($currency == "EURO") {
         echo $_POST["amount"] . " euro is " . round($_POST["amount"]/$exhangerate, 2) . " lei."; 

      }
   
  }

?>

