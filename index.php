<?php
//создание двумерного массива
$a = array(
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
    array() ,
);

//заполнение двумерного массива a случайными числами от 1 до 20
for ($i = 0;$i <= 9;$i++)
{
    for ($j = 0;$j <= 9;$j++)
    {
        $a[$i][$j] = rand(1, 20);
    }
}

//вывод массива а в виде таблицы
echo "<table border style='border-collapse:collapse;width:500px;text-align:center'><tr>";

foreach ($a as $value)
{
    echo "<tr>";
    for ($i = 0;$i <= count($value) - 1;$i++)
    {
        echo "<td>$value[$i]</td>";
    }
    echo "</tr>";
}
echo "</table>";

//создание и заполнение массива b
$b = array();

for ($i = 0;$i <= 9;$i++)
{
    $b[$i] = rand(1, 20);
}
echo "</br>";

//сравниваю каждый элемент массива а с b и в случае не совпадения меняю а
foreach ($a as & $value)
{
    $c = 0;
    for ($j = 0;$j <= 9;$j++)
    {
        for ($i = 0;$i <= 9;$i++)
        {
            if ($value[$j] == $b[$i])
            {
                $c = 1;
            }
        }
        if ($c == 1)
        {
            $c = 0;
        }
        else
        {
            $value[$j] = 'нет';
        }
    }
}

$lineB = implode(" ", $b);//сделал из массива строку для удобства


//создание измененной таблицы
echo "<table border style='border-collapse:collapse;width:500px;text-align:center'><caption><strong>$lineB</strong></caption><tr>";
unset($value); //после использования foreach в value остаются данные, что нарушает работу при выводе
foreach ($a as $value)
{
    echo "<tr>";
    for ($i = 0;$i <= 9;$i++)
    {
        if ($value[$i] != "нет")
        {
            echo "<td>$value[$i]</td>";
        }
        else
        {
            echo "<td>$value[$i]</td>";
        }

    }
    echo "</tr>";
}
echo "</table>";
