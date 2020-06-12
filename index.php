<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My first PHP</title>
</head>

<body>

    <h2>Ниже код на PHP</h2>

    <?php
    echo "<h1>Welcome!</h1>";
?>

    <h2 style="color: green;">Сегодня <?php echo date("d-m-Y")?></h2>

    <h1 style="color: white; text-align: center; background: grey;">Меняем переменные местами</h1>

    <form method="post">
        <input name="varA" style="width: 150px; height: 30px; margin-bottom: 10px; margin-left: 10px; padding-left: 10px;" type="text" placeholder="Введите переменную a">

        <input name="varB" style="width: 150px; height: 30px; margin-bottom: 10px; padding-left: 10px;" type="text" placeholder="Введите переменную b"> <br>

        <input type="submit" value="Поменять местами" name="button" style="width: 166px; height: 40px;  margin-left: 10px; margin-bottom: 20px; cursor: pointer;">
    </form>
    <br>

    <?php
    if(isset($_POST['button']))
    {
        $a = $_POST['varA'];
        $b = $_POST['varB'];
 
    echo "Введено: <br>Переменная a = " .$a .";<br>";
    echo "Переменная b = " .$b .";<br>";
    $a +=$b;
    $b = $a - $b;
    $a -= $b;
    echo "<hr><h2>Теперь переменная a = ".$a ."; переменная b = ".$b . "<br></h2>";

    }
    ?>
    <br>
    <hr>

    <h1 style="text-align: center; color: white;  background: grey;"><?php
 echo "Переменные: выполнение примеров из методички."?> </h1>
    <?php
$x = 10;
echo "Переменная \$x = $x <br>"; 
$y = "Переменная \$y = ".$x*3;
echo $y;
    ?>
    <hr>

    <?php
$rand = 10;
echo "Переменная \$rand = $rand;<br>";
echo "Остаток от деления переменной \$rand на 3 равен ".$rand % 3 .";";
        
//$a = 10;
//$a++;//постфиксная форма инкремента
//$a = $a + 1;
//++$a;//префиксная форма инкремента

//постфиксная форма инкремента
$x = 5;
$y = $x++;//увеличение выполняется в последнюю очередь
echo " <hr>Переменная y = ".$y++;
echo "<br>x = $x<br>y = $y <hr>";

echo "Префиксная и постфиксная формы инкремента: <br>";
$x = 5;
echo $x++;
echo $x--;
echo --$x;

        $a = "Hello!";
        $b = true;
        $c = 45;
        $d = 4.2;
        echo "<hr>$a<br>";
        echo $b."<br>";
        echo $c."<br>";
        echo $d."<hr>";
        
$a = (int) '05';
$b = (string) 145.3;
$c = (bool) -4;
echo "Строка -> Число -> Строка : " . $a ." //Т. к. PHP является слаботипизированным языком, то результатом функции Int для строки '05' будет целое число 5<br>";
echo "Число -> Строка : " . $b ." // Функция string преобразует дробное число в строку и возвращает в переменную \$b уже строчную форму (вид представления не меняется).  <br>";
echo "Число -> Булево -> Строка : " . $c ." // Т. к. -4 это число, не равное 0, то функция bool возвращает true, т. е. 1.<hr>";
        
        $a = 0;
        echo $a++ ." // Постинкремент<br>";
        echo ++$a ." // Преинкремент<hr>";
        
        $a = 4;
        $b = '4';
        var_dump ($a == $b);
        echo "// \$a = 4; \$b = '4'; Сравнение c приведением типов возвращает true, т. к. \$a - это число, \$b - это тоже число, приведенное из строки <br>";
        var_dump ($a === $b);
        echo "// \$a = 4; \$b = '4'; Сравнение без приведения типов возвращает false, т. к. \$a - это число, а \$b - это строка <br>";
        var_dump ($a > $b);
        var_dump ($a < $b);
        var_dump ($a <> $b);
        var_dump ($a != $b);  // Здесь будет false
        var_dump ($a !== $b); // Здесь будет true
        var_dump ($a <= $b);
        var_dump ($a >= $b);
        echo "<hr>";
    ?>
    <h1 style="color: white; text-align: center; background: grey;">Выполнение п.3 домашнего задания</h1>
    <?php
    $a = 5;
    $b = '05';
    echo "Переменная a = " .$a ."<br>"; 
    echo "Переменная b = " .$b ."<br>";
    var_dump ($a == $b);
    echo " // var_dump (\$a == \$b) Функция сравнения с приведением типов возвращает true, т. к. строковое значение переменной b = 05 приводится к целому числу 5. Поэтому при сравнении с приведением типов переменные a и b равны. <hr>";
    
    var_dump((int) '012345');
    echo " // Функция int возвращает целое число из строки 012345. <hr>";
    
    var_dump ((float)123.0 === (int)123.0);
    echo " // (float)123.0 возвращает дробное число 123.0, а (int)123.0 возвращает целое число 123. При сравнении без приведения типов результатом будет false, а при сравнении с приведением типов будет true. <hr>";
    
    var_dump ((int)0 === (int)'Hello, World!');
    echo "<br>" .(int)0 ."<br>";
    echo (int)'Hello, World!' ."<br>";
    echo " // Функция int из нуля возвращает число 0, и из строки int тоже возвращает число 0, т. к. в строке 'Hello, World!' отсутствуют числовые символы. Поэтому результатом операции сравнения двух нулей будет true (в данном примере оператор === не имеет смысла, т. к. сравниваются переменные, заведомо приведенные к одному типу int). <hr> ";
    ?>
</body>

</html>
