<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP_Level1_Lesson_2</title>
    <style>
        h2 {
            color: aliceblue;
            text-align: center;
            background: grey;
            font-weight: 200;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h2>п. 1 ДЗ: if ... else</h2>
    <?php
    $a = rand (-100,100);
    $b = rand (-200,200);
    echo "Переменная а = " .$a ."<br>";
    echo "Переменная b = " .$b ."<hr>";
    if ( $a >= 0 && $b >= 0 ) {
        $diff = $a - $b;
        echo "Разность чисел: " .abs($diff)."<br>";
    } 
    else if ( $a < 0 && $b <0 ) {
        $mul = $a * $b;
        echo "Произведение чисел: ".$mul."<br>";
    }
    else {
        $sum = $a + $b;
         echo "Сумма чисел: ".$sum."<br>";
    }
    ?>
    <h2>п. 2 ДЗ: Вывод чисел до 15, начинающихся со случайного числа</h2>
    
    <?php
    $array = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
    echo "Ряд чисел: ".implode("; ",$array)."<br>";
    $a = rand (0,15);
    echo "Переменная а = ".$a."<hr>";
    
    switch ($a) { //Зачем через switch? Уточнить.
        case 0:
        echo "Новый ряд чисел: ".implode("; ",$array)."<br>";
        break;
        case ( $a >= 1 && $a <= 14 ):
        echo "Новый ряд чисел: ".implode("; ",array_slice($array, $a,16))."<br>";
        break;
        default:
        echo "Новый ряд чисел: ".$a."<br>";
    }
    
    //Короткий вариант без switch 
    $newArr = array_slice($array,$a,16);
    echo "Новый массив без использования switch: ".implode("; ",$newArr)."<br>"; 
        
    //while
    echo "Реализация через while: ";
    while ($a <= 15){
    echo $a."; ";
    $a++;
  }
    ?>
    
    <h2>п. 3 ДЗ: Математические функции</h2>
    <?php
    function summ($x,$y){
        return $x + $y;
    }
    function diff($x,$y){
        return $x - $y;
    }
    function mult($x,$y){
        return $x * $y;
    }
    function div($x,$y){
        if ($y != 0)
        return $x / $y;
            else echo "Деление на НОЛЬ <br>";
    }
    $x = rand(-10,10);
    $y = rand(-10,10);
    echo "Переменная X = " .$x ."<br>";
    echo "Переменная Y = " .$y ."<hr>";
    
    echo "Сумма: ".summ($x,$y).";<br>";
    echo "Разность: ".diff($x,$y).";<br>";
    echo "Произведение: ".mult($x,$y).";<br>";
    echo "Частное: ".div($x,$y).";<br>";
    ?>

    <h2>п. 4 ДЗ: mathOperation</h2>
    <?php
    function mathOperation($a,$b,$operation){
        switch ($operation) {
            case '+':
                return summ($a,$b);
                break;
            case '-':
                return diff($a,$b);
                break;
            case '*':
                return mult($a,$b);
                break;
            case '/':
                return div($a,$b);
                break;
            case '':
                echo "Оператор не введен!<br>";
                break;
            default:
                echo "Введен не математический оператор!<br>";
                break;
            }
        
          }
    $a = rand(-5,5);
    $b = rand(-5,5);
    echo "Переменная а = " .$a ."<br>";
    echo "Переменная b = " .$b ."<hr>";
    echo "Результат функции mathOperation: ".mathOperation($a,$b,'/').";<br>";
    ?>
    
     <h2>п. 6 ДЗ: Возведение в степень_Рекурсия</h2>
     
    <?php
    function power($val,$pow){
     if ( $pow == 0 )
        return 1;
            else if ( $pow == 1 )
            return $val;
        else if ( $pow % 2 == 0 )
            return power($val * $val, abs($pow/2));
        else
            return power($val * $val, abs($pow/2)) * $val;
    }

    if ( $b >= 0 )
    echo "Переменная A в степени B = " .power($a,$b).";<br>";
    else if ( $a != 0 ) {
    $minusPower = 1/power($a,$b);
    echo "Переменная A в степени B = ".$minusPower.";<br>";    
    } else
    echo "Возведение 0 в отрицательную степень невозможно (Операция деления на 0)!<br>";
    ?>
    
     <h2>п. 7 ДЗ: Приведение времени к падежам</h2>
     
     <?= "Текущее время: " .date("H-i")."<hr>";

    function render($hour,$min){
        if ( ( $hour >= 5 && $hour <= 20 ) || $hour == 0 ) 
            $hourText = ' часов : ';
            else if ( $hour == 1 || $hour == 21 )
            $hourText = ' час : ';
        else
            $hourText = ' часа : ';
                
        if ( ( $min >= 5 && $min <= 20 ) || ( $min >= 25 && $min <= 30 ) || ( $min >= 35 && $min <= 40 ) || ( $min >= 45 && $min <= 50 ) || ( $min >= 55 && $min <= 60 ) || $min == 0 ) 
            $minText = ' минут;<br>';
        else if ( $min == 1 || $min == 21 || $min == 31 || $min == 41 || $min == 51 )
            $minText = ' минута;<br>';
        else
            $minText = ' минуты;<br>';
        $time = $hour.$hourText.$min.$minText; 
        return $time;
        }
    
    $c = date("H");
    $d = date("i");
    echo render($c,$d);
    
    ?>

</body>

</html>
