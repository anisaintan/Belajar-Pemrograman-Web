<?php

echo "<b><u>TUGAS PERULANGAN</u></b>";
echo "<br><br><br>";
echo "Perulangan For (1-5)";
for ($i = 1; $i <= 5; $i++) {
    echo "<br>";
    for ($j = 1; $j <= $i; $j++) {
        echo "$i";
    }
}

echo "<br><br><br>";
echo "Perulangan While (1-6)";
$a = 1;
$b = 1;
while ($a <= 7) {
    echo "<br>";
    while ($b <= $a) {
        echo "$a";
        $b++;
    }
    $a++;
    $b = 1;
}

echo "<br><br><br>";
echo "Perulangan Do-While (1-7)";
$c = 1;
$d = 1;
do {
    echo "<br>";
    do {
        echo "$c";
        $d++;
    } while ($d <= $c);
    $c++;
    $d = 1;
} while ($c <= 7);
