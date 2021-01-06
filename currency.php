

<?php
   ini_set('display_errors', '1');
   ini_set('display_startup_errors', '1');
   error_reporting(E_ALL);

   $exhangerate = 0.2053;

   echo $_POST["amount"] . " lei is " . round($_POST["amount"]*$exhangerate, 2) . " euros.";

?>

