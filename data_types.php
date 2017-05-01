<?php
$true=true;
$int=123;
$double=123.4;
$string="string";
$array=array();
$oop=456;
$url=234;
$null=null;
echo "<h1>переменные</h1>";

var_dump ($true,$int,$double,$string,$array,$oop,$url,$null);
echo "<br/>переменная true=$true";
echo '<br/>переменная true=$true';
echo "<br/>переменная int=$int";
echo "<br/>переменная double=$double";
echo "<br/>переменная string=$string";
$int=321;
echo "<br/>переменная int=$int";
echo "<br/>";
echo "<h1>константы</h1>";
echo PHP_VERSION;
define("PI",3.14);
echo "<br/>";
echo PI;
echo "<br/>";
echo defined("PI");echo "<br/>";
echo "<h1>арифметические операции</h1>";
$x=32;
$y=22.13;
$summ=$x+$y;
$diff=$x-$y;
$mult=$x*$y;
$dil=$x/$y;
echo "<br/>сумма из $x и $y = $summ";
echo "<br/>разница из $x и $y = $diff";
echo "<br/>умножение из $x и $y = $mult";
echo "<br/>деление из $x и $y = $dil";
echo "<br/>";
echo "<h1>остаток при делении</h1>";
echo "<br/>";
$z=12;
$ostatok=$x%$z;
echo "остаток при делении из $x и $z = $ostatok";

$q=400;
$q=$q+10;
$q+=10;
$q-=10;
$q/=10;
$q++;
echo $q;
echo "<br/>";
echo "<h1>строковые операции</h1>";
    $str_1="<b>Первая строка<\b><input type=\"text\"/>";
    $str_2="<i>Вторая строка</i>";

echo "<br/>$str_1";
echo "<br/>$str_2";
echo "<br/>";
echo $str_1." ".$str_2.' " '." \" \\ ". ' \'  ';
echo "<br/>";
echo "<h1>логические операции</h1>";
$x=12;
$y=34;
$z=4.25;

$bool_1=$x == $z ."<br/>";// проверка равенства(если равны запишется-true
                          //   если неравны запишется false
$bool_1=$x != $z;// проверка неравенства(если не равно запишется- true
$bool_2=$x > $y;//если больше запишется true
$bool_2=$x <= $y;//если меньше или равно запишется true

echo $bool_1."<br/>".$bool_2;

$bool_3=!($x == $y);// !-логическое нет,переворачивает значение
$bool_4=$x == $y || $z < $y;// логическая операция или(||)
                            //(если хотя б одно значение будет true-
                            //запишется true)
$bool_5=$z != $y && $x < $y;// логическая операция и(&&)
                            //(если оба значения будут true-
                            //запишется true,если хоть одно будет false-
                            //запишется false)
$bool_6=$z != $x ^ $y > $z;//взаимо-исключающее или(^)
                           //(если оба значения будут true-
                            //запишется false,если оба значения будут false-
                            //запишется false,
                           //когда значения будут разные запишется-true)

echo"<br/>".$bool_3."<br/>".$bool_4."<br/>".$bool_5."<br/>".$bool_6;

$bool = !($x != $y && $z < $x) || $x != $y;

echo"<br/>$bool = !($x != $y && $z < $x) || $x != $y";

echo "<br/>";
echo "<h1>оператор эквивалентности</h1>";
$string="exemple";
$num=0;

$bool_1=$string==true;
echo"$bool_1=$string==true;";
$bool_2=$num=="";
echo"<br/>$bool_2=$num==\"\";<hr/>";


$bool_3=$string===true;
echo"$bool_3=$string===true;";
$bool_4=$num==="";
echo"<br/>$bool_4=$num===\"\";";
echo "<br/>";
echo "<h1>условные операторы</h1>";
$x=10;
$y=5;

   if($x==$y && $x !=12 && $y == 5 && ($x +5)==15)
       echo"yra!";
   else if($x==15 || $y!=7){
       $num=5;
       echo"число №".$num;
   }
   else{
       echo"<br/>";

       echo"всё сработало!";
   }

   $x==$y ? $string="yes" : $string="no";
   echo"<br/>".$string;

echo "<h1>оператор Switch()case</h1>";

$x=7;

switch($x){
    case"hello" : echo"это строковая переменная";break;
    case 5 : echo"это переменная равна 5";break;
    case 7 : echo"это переменная равна 7";break;
    case 12 : echo"это переменная равна 12";break;
    default : echo"эта переменная нам не известна";
}
echo "<h1>циклы for,while и do while</h1>";
    for($i=100;$i>=80;$i-=2){
        if($i % 5 == 0) continue;//останавливает цикл на данной итерации
        if($i <= 87) break;//полностью останавливает цикл и выходит
        echo"цикл под номером № $i<br/>";
    }
    echo"<br/>";

    $x=1;

    while($x<=10){
        echo"итерация под номером № $x<br/>";
        if($x==7)
            for($y=0;$y<5;$y+=3)
        echo"итерация под номером № $x<br/>";
        $x++;

    }
echo"<br/>";
$z=10;
    do{
        echo"операция выполнилась только один раз";
        $z++;
    } while($z<5);

echo "<h1>массивы элементов</h1>";
$array=array(12,-3.25,"string",true);
echo $array[1];
$array[1]="string";
$array[2]=4.25;
echo"<br/>".$array[1]."<br/>".$array[2];
$array[]="new element";
echo"<br/>".$array[4]."<hr/>";

for($i=0;$i<count($array);$i++){
    echo "элемент массива с индексом $i=".$array[$i]."<br/>";
}
echo "<h1>ассоциативные массивы</h1>";

$list=array("age"=>12,"name"=>"alex","schoolboy"=>true);
$list["age"]=10;
$summa=0;
echo"<hr/>". getAverage(array("first"=>12,"sec"=>45,"third"=>23,"forthg"=>55));

function getAverage($array){
foreach($array as $key=>$value){
    $summa += $value;
    echo $key."<br/>";
}
return $summa/count($array);
}
echo "<h1>двумерные массивы</h1>";
$array=array(array(12,4.46,"string",true),array("exemple"),array(45,"strong"));

echo $array[0][2]."<hr/>";

for($i=0;$i<count($array);$i++){
    for($j=0;$j<count($array[$i]);$j++){
echo$array[$i][$j]." |  ";

    }
    echo"<br/>";
}

echo "<h1>область видимости переменных</h1>";

$x=12;
echo"переменная x=$x<br/>";
$x=10;
echo"переменная x=$x<br/>";

function test (){
   // $GLOBALS["x"]+=7;
    global $x;
    $x+=10;
  //  echo "переменная x=$x<br/>";
}
test();
function test_2(){
    static $id;
    $id++;
    echo $id."<br/>";
}
for($i=0;$i<10;$i++){
test_2();
}
echo "<h1>подключение файлов</h1>";


