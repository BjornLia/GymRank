<!DOCTYPE html>
<html>
<body>

<h1>My first PHP project</h1>

<?php
function test() {
  static $x = 1.34;
  print $x;
  $x++;
  $txt = "Baba dook dook dook";
  echo "<p>Scary sound: $txt </p>";
}
test ();

class Car {
  function Car() {
    $this->model = "Porshe";
  }
}

$herbie = new Car();

echo "<br>";
echo $herbie->model;
echo "<br><br>";
define("HELLO", "Hey boy, long time no see. Wink, wink", true);

echo hello;
echo "<br><br>";
$t = date("H");

if ($t < "10") {
  echo "It's still day! Even though it's shit weather:(";
} elseif ($t <"20") {
  echo "You made it so far, maybe you will not die today!";
} else {
  echo "This is the end.";
}

echo "<br><br>";

$food = "candy";

switch ($food) {
  case "meat":
    echo "You suck";
    break;
  case "veggies":
    echo "Om nom nom";
    break;
  case "candy";
    echo "Powerpuff girls!";
    break;
  default:
    echo "You are too complicated maaan";
}

echo "<br><br>";

for ($h = 0; $h <= 10; $h++) {
  echo "Your number is: $h <br>";
}

echo "<br><br>";

$moneys = array("dollar", "pound", "zloty");

foreach ($moneys as $unit) {
  echo "$unit <br>";
}

echo "<br><br>";

function name($fname = "Lolita", $lname = "Chickita", $birthyear = 1990) {
  $year = date("Y");
  $age = $year - $birthyear;
  echo "$fname from the house $lname trolololo, died at the age of $age<br>";
}

name("Lia", "Maty");
name("Markus", "Mattsson", "1989");

?>
</body>
</html>


