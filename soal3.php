<?php
$number = 5956560159466056;
echo "INPUT = $number";
$pisah = explode("0",$number);
$number1 = str_split($pisah[0]);
$number2 = str_split($pisah[1]);
$number3 = str_split($pisah[2]);

$panjang1 = count ($number1);
$panjang2 = count ($number2);
$panjang3 = count ($number3);
        echo "<br>";
        echo "OUTPUT = ";
            $urut1 = sort($number1);
                    for ($j=0; $j<$panjang1; $j++)
                    {
                    echo preg_replace('/\D/', '', $number1[$j]);
                    }
                    for ($j=0; $j<$panjang2; $j++)
                    {
                    echo preg_replace('/\D/', '', $number2[$j]);
                    }
                    for ($j=0; $j<$panjang3; $j++)
                    {
                    echo preg_replace('/\D/', '', $number3[$j]);
                    }
?>