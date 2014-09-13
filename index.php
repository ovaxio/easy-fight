<?php 
ini_set('error_reporting', E_ALL);
function __autoload($class) {
  require_once 'inc/'.$class.'.class.php';
}

$batman = new Player('Batman', 34, 42);
$ironman = new Player('Ironman', 43, 20);

$fight = new Fight($batman, $ironman);
$fight->start();

echo "\n<strong>".$fight->getWinner()->getName().' win !</strong>';
?>
