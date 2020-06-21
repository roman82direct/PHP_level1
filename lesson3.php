<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP_Level1_Lesson_3</title>
    <style>
        body {
             font-family: sans-serif;
        }
        header {
            display: flex;
            justify-content: space-around;
            min-height: 80px;
            background-color: #f8f7f8;

        }

        h2 {
            color: aliceblue;
            text-align: center;
            background: grey;
            font-weight: 200;
            font-family: sans-serif;
        }

        .menu {
            margin-top: 25px;
            list-style-type: none;
            text-transform: uppercase;
        }

        .menu>li {
            display: inline-block;
            margin-left: 110px;
            position: relative;
        }

        .menu>li:first-child {
            margin-left: 0px;
        }

        .menu a {
            font-size: 20px;
            font-family: sans-serif;
            display: block;
            outline: none;
            padding: 2px 2px;
            transition: .2s linear;
            color: black;
            text-decoration: none;
        }

        .submenu {
            list-style-type: none;
            position: absolute;
            top: 100%;
            left: -90%;
            width: 220%;
            z-index: 1;
        }

        .submenu>li {
            height: 35px;
            text-align: center;
            border-left: 1px solid darkgrey;
            border-right: 1px solid darkgrey;
            border-bottom: 1px solid darkgrey;
            background: #f8f7f8;
            opacity: 0.8;
        }

        .submenu>li:first-child {
            border-top: 1px solid darkgrey;
        }

        .submenu a {
            font-size: 16px;
            padding-top: 10px;
        }

        .submenu {
            display: none;
        }

        .menu li:hover .submenu {
            display: block;
        }

        .menu a:hover {
            color: darkgrey;
        }

        .menu a:active {
            color: dimgrey;
        }

    </style>
</head>

<body>
    <header>
        <?php
    $nav = ['Главная',
            'Каталог',
            'О компании'=>['История компании','Наша команда','Наши ценности'],
            'Контакты'];
//    echo "<pre>";
//    print_r ($nav);
//    echo "</pre>";
        
    echo "<ul class='menu'>";
    
    foreach ($nav as $index => $main) {
        if (is_int($index))
        echo "<li><a href='#'>".$main."</a></li>";
        else 
        echo "<li><a href='#'>".$index."</a>";
        
        if (is_array($main)){
            echo "<ul class='submenu'>";
        foreach($main as $sub) {
            echo "<li><a href='#'>".$sub."</a></li>";
        }
        echo "</ul>";  
        }
    }
    echo "</ul>";
    
    ?>

    </header>
    <h2>п. 1 ДЗ: while</h2>
    <?php
    while ( $i <= 100 ) {
        if ($i !=0 && $i % 3 == 0 )
            echo "$i; ";
        $i++;
    }
    ?>

    <h2>п. 2 ДЗ: do ... while</h2>
    <?php
    $i = 0;
    do{
        if ( $i == 0 )
            echo $i." - ноль; <br>";
        else
        if ( $i % 2 == 0 )
            echo $i." - чётное число; <br>";
        else
            echo $i." - нечётное число; <br>";
        $i++;
    }   while ( $i <= 10 )
    ?>

    <h2>п. 3 ДЗ: Regions & Cities</h2>
    <?php
        $arr = ["Московская область"=>
                ["Королев","Мытищи","Балашиха","Видное","Подольск"],
                "Ленинградская область"=>
                ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
                "Рязанская область"=>
                ["Рязань", "Касимов", "Скопин", "Ряжск"]
               ];
    foreach ($arr as $region => $city) {
        echo "<h3>$region:</h3>".implode(", ", $city)."<br>";
        }
    ?>

    <h2>п. 4, 5 и 9 ДЗ: Транслитерация, замена символов в строке</h2>

    <form method="post">
        <textarea name="text" style="width: 550px; height: 130px; margin-bottom: 10px; margin-left: 10px; padding-left: 10px;" placeholder="Введите текст для транслитерации"></textarea><br>

        <input type="submit" value="ВЫПОЛНИТЬ" name="button" style="width: 166px; height: 40px;  margin-left: 10px; margin-bottom: 20px; cursor: pointer">
    </form>
    <br>

    <?php
    
// Английский алфавит   
//    foreach(range('a','z') as $eng) {
//        echo $eng."; ";
//        }
//Русский алфавит
//    for ($i = 224; $i <= 255; $i++) {
//    echo iconv('CP1251', 'UTF-8', chr($i))."; ";
//         }

    
    function translit($str){
    $rus = ['а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo',
           'ж'=>'zh','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m',
           'н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u',
           'ф'=>'f','х'=>'kh','ц'=>'ts','ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>'"',
           'ы'=>'y','ь'=>'`','э'=>'e','ю'=>'yu','я'=>'ya','А'=>'A','Б'=>'B',
            'В'=>'V','Г'=>'G','Д'=>'D','Е'=>'E','Ё' =>'Yo','Ж' =>'Zh','З'=>'Z',
            'И'=>'I','Й'=>'Y','К'=>'K','Л'=>'L','М'=>'M','Н'=>'N','О'=>'O',
            'П'=>'P','Р'=>'R','С'=>'S','Т'=>'T','У'=>'U','Ф'=>'F','Х'=>'Kh',
            'Ц'=>'Ts','Ч'=>'Ch','Ш'=>'Sh','Щ'=>'Shch','Ь'=>'`','Ы'=>'Y','Ъ'=>'"',
            'Э'=>'E','Ю' =>'Yu','Я'=>'Ya'];
        $str = strtr($str,$rus);//транслитерация
        $symbols = ["-","!","?",".",",","/","\\",";",":"," "];//объявляем ненужные символы
        $str = str_replace($symbols, "_", $str); //меняем ненужные символы на _
        $str = preg_replace('/(_){0,}/', '$1', $str);//удаляем повторяющиеся друг за другом символы _
        return $str;
        }
    
    if(isset($_POST['button']))
    $str = $_POST['text'];
    echo "<h3>Результат выполнения: </h3>".translit($str)." <br>";
    ?>


    <h2>п. 7 ДЗ: Empty FOR</h2>
    <?php
        for ($i = 0; $i <= 9; print($i++."; "));
        ?>

    <h2>п. 8 ДЗ: Regions & Cities на К</h2>
    <?php
    foreach ($arr as $region => $city) {
        echo "<h3>$region:</h3>";
        foreach ($city as $name) {
            if (mb_substr($name, 0, 1) == 'К')
        echo $name."<br>";
        }
            }
        ?>

</body>

</html>
