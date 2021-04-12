<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("white", "green", "red");
$arrlength = count($cars);

echo "A. ";
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo ", ";
}

echo "<br><br>B. ";
for($x = 0; $x < $arrlength; $x++) {
  echo '<li>'. $cars[$x]. '</li>';
}
?>

</body>
</html>
