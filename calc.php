<?php
function bitReverse($samples) //$samples = Array of Samples
{
  $num = count($samples);
  $arrayr = array();
  $i = 0;
  while ($i < $num) {
    $ibin = decbin($i);
    $istr = strval($ibin);
    $rstr = strrev($ibin);
    $rbin = floatval($rstr);
    $ri = bindec($rbin);

    $arrayr[$ri] = $samples[$i];
    $i++;
  }
  return $samples;
}

function Module4($input)
{
  $a = $input[0];
  $b = $input[1];
  $c = $input[2];
  $d = $input[3];

  $outputcos = [
    0 => $a+$b+$c+$d,
    1 => $a-$b,
    2 => $c+$d-$a-$b,
    3 => $a-$b
  ];

  $outputsin = [
    0 => 0,
    1 => $c-$d,
    2 => 0,
    3 => $d-$c
  ];

  $output = [
    "Sine" => $outputsin,
    "Cosine" => $outputcos
  ];

  return $output;
}

function Module8($input)
{
  $a = $input[0];
  $b = $input[1];
  $c = $input[2];
  $d = $input[3];
  $e = $input[4];
  $f = $input[5];
  $g = $input[6];
  $h = $input[7];
  $r = [];
  $i = [];
  for ($j=0; $j < 3; $j++) {
    $r[$j] = cos(((2*pi())/2)*$j);
    $i[$j] = sin(((2*pi())/2)*$j);
  }

  $outputcos = [
    0 => $a + $b + $c + $d + $e + $f + $g + $h,
    1 => $a - $b + ($e * $r[1] - $f * $r[1] - $g * $i[1] + $h * $i[1]),
    2 => $c + $d - $a - $b + ($e * $r[2] - $f * $r[2] - $g * $i[2] + $h * $i[2]),
    3 => $a - $b + ($e * $r[3] - $f * $r[3] - $g * $i[3] + $h * $i[3]),
    4 => $a + $b + $c + $d - $e - $f - $g - $h,
    5 => $a - $b - ($e * $r[1] - $f * $r[1] - $g * $i[1] + $h * $i[1]),
    6 => $c + $d - $a - $b - ($e * $r[2] - $f * $r[2] - $g * $i[2] + $h * $i[2]),
    7 => $a - $b - ($e * $r[3] - $f * $r[3] - $g * $i[3] + $h * $i[3])
  ];

  $outputsin = [
    0 => 0,
    1 => $c-$d+($e*$i[1]-$f*$i[1]+$g*$r[1]-$h*$r[1]),
    2 => ($e*$i[2]-$f*$i[2]+$g*$r[2]-$h*$r[2]),
    3 => $d-$c+($e*$i[3]-$f*$i[3]+$g*$r[3]-$h*$r[3]),
    4 => 0,
    5 => $c-$d-($e*$i[1]-$f*$i[1]+$g*$r[1]-$h*$r[1]),
    6 => 0-($e*$i[2]-$f*$i[2]+$g*$r[2]-$h*$r[2]),
    7 => $d-$c-($e*$i[3]-$f*$i[3]+$g*$r[3]-$h*$r[3])
  ];

  $output = [
    "Sine" => $outputsin,
    "Cosine" => $outputcos
  ];
  return $output;
}
?>
