<?php

use Dom\ProcessingInstruction;
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:

//Задание 1
echo "Exercise 1\n";
$order = & $very_bad_unclear_name;
$order .= "QWERTY";
echo "$very_bad_unclear_name\n\n";

//Задание 2
echo "Exercise 2\n";
$i_num = 52;
echo "Integer number: $i_num\n";

$f_num = 5.2;
echo "Float number: $f_num\n";

echo 6 + 6;
echo "\n";

$lastMonth = 1024;
$thisMonth = 256;
echo $lastMonth - $thisMonth;

//Задание 3
echo "\n\nExercise 3\n";
$numLanguages = 4;
$months = 11;
$days = $months * 16;
$daysPerLanguage = $days / $numLanguages;
echo "Days per language: $daysPerLanguage\n\n";

//Задание 4
echo "Excecise 4\n";
echo 3**2;

//Задание 5
echo "\nExcecise 5\n";
$myNum = 701;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "Answer: $answer\n";

//Задание 6
echo "\nExcecise 6\n";
$a = 10;
$b = 3;
$c = $a % $b;
echo "$c\n";

if ($a % $b == 0) echo "Делится\n";
else echo "Делится с остатком\n";

$st = pow(2, 10);
echo "Pow: $st\n";

$sq = sqrt(245);
echo "Sq: $sq\n";

$arr = Array(4, 2, 5, 19, 13, 0, 10);
$n = 0;
foreach ($arr as $element) $n += ($element**2);
$n = sqrt($n);
echo "$n\n";

$num = sqrt(379);
$num1 = round($num, 0);
echo "Round: $num1\n";
$num2 = round($num, 1);
echo "Round: $num2\n";
$num3 = round($num, 2);
echo "Round: $num3\n";

$array = Array("floor"=> floor(sqrt(587)), "ceil"=> ceil(sqrt(587)));
echo $array["floor"]."\n";
echo $array["ceil"]."\n";

echo "Min: ".min(4, -2, 5, 19, -130, 0, 10)."\n";
echo "Max: ".max(4, -2, 5, 19, -130, 0, 10)."\n";
echo "Random: ".random_int(1, 100)."\n";

$arr1 = Array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
for($i = 0; $i < 10; $i++) {
    $arr1[$i] = random_int(1, 100);
    echo "Random number $i: ".$arr1[$i]."\n";
}

$a = -17;
$b = 12;
echo "abs: ".abs($a - $b)."\n";

$arr = Array(1, 2, -1, -2, 3, -3);
foreach($arr as $element) {
    $element = abs($element);
    echo "Element: ".$element."\n";
}

$num = 30;
$arr = Array(1);
for($i = 2; $i < $num / 2 + 1 ; $i++) 
    if ($num % $i == 0) array_push($arr, $i);

array_push($arr, $num);
print_r($arr);

$arr = Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    if ($sum > 10) {
        echo $i."\n";
        break;
    }

    $sum += $arr[$i];
}

//Задание 7
echo "\nExcecise 7\n";
function printStringReturnNumber() {
    echo "Ваше число: ";
    return 808;
}

$my_num = printStringReturnNumber();
echo $my_num."\n";

//Задание 8
echo "\nExcecise 8\n";
function increaseEnthusiasm(string $str) {
    return $str."!";
}
echo increaseEnthusiasm("Эй, ухнем")."\n";

function repeatThreeTimes(string $str) {
   return $str.$str.$str;
}
echo repeatThreeTimes("А судь кто?")."\n";
echo increaseEnthusiasm(repeatThreeTimes("Man"))."\n";
function cut(string $str, int $symbols = 10) {}

function printArrayRecursively($array, $index = 0) {
    if ($index >= count($array)) {
        return;
    }

    echo $array[$index] . "\n";
    printArrayRecursively($array, $index + 1);
}

$numbers = [1, 2, 3, 4, 5];
printArrayRecursively($numbers);

function sumDigitsUntilSingle($number) {
    $digits = str_split((string)$number);

    $sum = array_sum($digits);

    if ($sum > 9) {
        return sumDigitsUntilSingle($sum);
    }

    return $sum;
}

$number = 1575;
echo "Итоговая сумма: " . sumDigitsUntilSingle($number)."\n";

//Задание 9
echo "\nExcecise 9\n";
$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
print_r($array);

function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}

$result = arrayFill('x', 5);
print_r($result);

$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;

foreach ($array as $subArray) {
    $sum += array_sum($subArray);
}

echo "Сумма элементов: $sum\n";

$array = [];
$count = 1;

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $array[$i][$j] = $count++;
    }
}

print_r($array);

$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);
echo "Результат: $result\n";

$user = [
    'name' => 'Артемий',
    'surname' => 'Будников',
    'patronymic' => 'Павлович'
];

echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic']."\n";

$date = [
    'year' => date('Y'),
    'month' => date('m'),
    'day' => date('d')
];

echo $date['year'] . '-' . $date['month'] . '-' . $date['day']."\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве: " . count($arr)."\n";
echo "Последний элемент массива: " . end($arr)."\n";
echo "Предпоследний элемент массива: " . $arr[count($arr) - 2]."\n";

//Задание 10
echo "\nExcecise 10\n";
function isSumGreaterThanTen($a, $b) {
    return ($a + $b) > 10;
}

var_dump(isSumGreaterThanTen(5, 6)); 
var_dump(isSumGreaterThanTen(2, 3));

function areNumbersEqual($a, $b) {
    return $a == $b;
}

var_dump(areNumbersEqual(5, 5));
var_dump(areNumbersEqual(2, 3)); 

$test = 0;
echo $test == 0 ? 'верно'."\n" : ''."\n";

$age = 20; // Пример числа

if ($age < 10 || $age > 99) {
    echo "Число меньше 10 или больше 99.\n";
} else {
    $sum = array_sum(str_split((string)$age));
    if ($sum <= 9) {
        echo "Сумма цифр однозначна: $sum\n";
    } else {
        echo "Сумма цифр двузначна: $sum\n";
    }
}

$arr = [1, 2, 3]; 

if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr)."\n";
} else {
    echo "В массиве не 3 элемента.\n";
}

//Задание 11
echo "\nExcecise 11\n";
for ($i = 1; $i <= 20; $i++) {
    echo str_repeat('x', $i) . "\n";
}

//Задание 12
echo "\nExcecise 12\n";
$array = [1, 2, 3, 4, 5];
$average = array_sum($array) / count($array);
echo "Среднее арифметическое: $average\n";

$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100: $sum\n";

$array = [1, 4, 9, 16, 25];
$sqrtArray = array_map('sqrt', $array);
print_r($sqrtArray);

$keys = range('a', 'z');
$values = range(1, 26);
$alphabetArray = array_combine($keys, $values);
print_r($alphabetArray);

$str = '1234567890';
$pairs = str_split($str, 2);
$sum = array_sum($pairs);
echo "Сумма пар чисел: $sum\n";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";