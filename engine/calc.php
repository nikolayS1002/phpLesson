<?php
function getCalc($arg1 = '', $arg2 = '', $op = ''){

    if ($_POST) {
        $op = $_POST["operation"];
        $arg1 = (float)strip_tags($_POST["arg1"]);
        $arg2 = (float)strip_tags($_POST["arg2"]);
        $result = mathOperation($arg1, $arg2, $op);
    }

    return [
      'arg1' => $arg1,
      'arg2' => $arg2,
      'result' => $result
    ];
}

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

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case 'sum':
      return sum($arg1, $arg2);
    case 'sub':
      return sub($arg1, $arg2);
    case 'mult':
      return mult($arg1, $arg2);
    case 'del':
      return del($arg1, $arg2);
    default:
    return "Значение математической операции не определено. Введите число от 1 до 4";
  }
}