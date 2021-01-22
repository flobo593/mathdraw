<?php
include 'calc.php';
include 'test.php';

?>

<!DOCTYPE html>
<html>
<body>
  

<?php
$sin = Module4($test1)["Sine"];
$cos = Module4($test1)["Cosine"];


echo "Sine:";
for ($k=0; $k < 4; $k++) {
  echo $sin[$k]."<br />";
}
echo "Cosine:";
for ($l=0; $l < 4; $l++) {
  echo $cos[$l]."<br />";
}
?>
</body>
</html>
