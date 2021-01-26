<?php
// ex 1

// $a = rand(-5, 5);
// $b = rand(-5, 5);

// if ($a >= 0 && $b >= 0) {
//   echo "A и B     больше или равны нулю. Разность равна : " . ($a - $b);
// } elseif ($a < 0 && $b <0) {
//   echo "А и В меньше нуля. Произведение равно : " . ($a * $b);
// } else {
//   echo "Иначе. Сумма равна : " . ($a + $b);
// }


// ex 2

// $z = rand(0, 15);

// switch ($z) {
//   case 0:
//     echo 0;
//   case 1:
//     echo 1;
//   case 2:
//     echo 2;
//   case 3:
//     echo 3;
//   case 4:
//     echo 4;
//   case 5:
//     echo 5;
//   case 6:
//     echo 6;
//   case 7:
//     echo 7;
//   case 8:
//     echo 8;
//   case 9:
//     echo 9;
//   case 10:
//     echo 10;
//   case 11:
//     echo 11;
//   case 12:
//     echo 12;
//   case 13:
//     echo 13;
//   case 14:
//     echo 14;
//   case 15:
//     echo 15;
//     break;
//   default:
//     echo "Значение не найдено";
// }

// ex 3

// $a = rand(0, 5);
// $b = rand(0, 5);
// echo "a = {$a} <br>";
// echo "b = {$b} <br>";

// echo sum($a, $b) . " - сумма <br>";
// echo sub($a, $b) . " - разность <br>";
// echo mult($a, $b) . " - умножение <br>";
// echo del($a, $b) . " - деление <br>";

function sum($x, $y)
{
  return $x + $y;
}

function sub($x, $y)
{
  return $x - $y;
}
function mult($x, $y)
{
  return $x * $y;
}
function del($x, $y)
{
  return ($y == 0) ? "деление на 0 невозможно" : ($x / $y);
}

// ex 4

// echo mathOperation(1, 2, 3); //($a, $b, введите: 1 - сумма, 2 - разность, 3 - умножение, 4 - деление)

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case 1:
      return sum($arg1, $arg2);
    case 2:
      return sub($arg1, $arg2);
    case 3:
      return mult($arg1, $arg2);
    case 4:
      return del($arg1, $arg2);
    default:
    return "Значение математической операции не определено. Введите число от 1 до 4";
  }
}

// ex 6 

echo power(2, 5);

function power($val, $pov) {
  if ($pov == 0) return $val = 0;
  return ($pov == 1) ? $val : $val * power($val, $pov - 1);
}
