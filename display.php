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
$sin8 = Module8($teschd2)["Sine"];
$cos8 = Module8($teschd2)["Cosine"];

echo "Sine: <br />";
for ($k=0; $k < 4; $k++) {
  echo $sin[$k]."<br />";
}
echo "Cosine: <br />";
for ($l=0; $l < 4; $l++) {
  echo $cos[$l]."<br />";
}

echo "Sine: <br />";
for ($m=0; $m < 8; $m++) {
  echo $sin8[$m]."<br />";
}
echo "Cosine: <br />";
for ($n=0; $n < 8; $n++) {
  echo $cos8[$n]."<br />";
}
?>
</body>
</html>
