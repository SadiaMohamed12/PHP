<?php

// ==========================================
// PHP ASSIGNMENT 1
// ==========================================


// 1. Greatest and Smallest of Three Numbers
echo "<h3>1. Greatest and Smallest</h3>";

$a = 15;
$b = 8;
$c = 20;

if ($a >= $b && $a >= $c) {
    $greatest = $a;
} elseif ($b >= $a && $b >= $c) {
    $greatest = $b;
} else {
    $greatest = $c;
}

if ($a <= $b && $a <= $c) {
    $smallest = $a;
} elseif ($b <= $a && $b <= $c) {
    $smallest = $b;
} else {
    $smallest = $c;
}

echo "Greatest = $greatest<br>";
echo "Smallest = $smallest<br>";


// 2. Divisible by 3, 5, Both or None
echo "<h3>2. Divisible by 3 and 5</h3>";

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "$num is divisible by both 3 and 5";
} elseif ($num % 3 == 0) {
    echo "$num is divisible by 3";
} elseif ($num % 5 == 0) {
    echo "$num is divisible by 5";
} else {
    echo "$num is divisible by none";
}


// 3. Odd Numbers 2 to 20 and Even Numbers 35 to 7
echo "<h3>3. Odd and Even Numbers</h3>";

echo "Odd numbers from 2 to 20: ";

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br>";

echo "Even numbers from 35 to 7: ";

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}


// 4. Numbers Divisible by 2 and 5
echo "<h3>4. Divisible by 2 and 5</h3>";

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}


// 5. Reverse of a Number
echo "<h3>5. Reverse Number</h3>";

$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = intdiv($num, 10);
}

echo "Reverse = $reverse";


// 6. LCM of Two Numbers
echo "<h3>6. LCM</h3>";

$a = 8;
$b = 12;

$lcm = ($a > $b) ? $a : $b;

while (true) {
    if ($lcm % $a == 0 && $lcm % $b == 0) {
        break;
    }
    $lcm++;
}

echo "LCM of $a and $b = $lcm";


// 7. HCF of Two Numbers
echo "<h3>7. HCF</h3>";

$a = 18;
$b = 24;

while ($b != 0) {
    $remainder = $a % $b;
    $a = $b;
    $b = $remainder;
}

echo "HCF = $a";


// 8. Multiplication Table 1 to 12
echo "<h3>8. Multiplication Table</h3>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";

for ($i = 1; $i <= 12; $i++) {

    echo "<tr>";

    for ($j = 1; $j <= 12; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";


// 9. Prime or Non-Prime
echo "<h3>9. Prime or Non-Prime</h3>";

$num = 17;
$isPrime = true;

if ($num < 2) {
    $isPrime = false;
}

for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
        $isPrime = false;
        break;
    }
}

if ($isPrime) {
    echo "$num is a Prime number";
} else {
    echo "$num is a Non-Prime number";
}


// 10. Prime Numbers from 10 to 50
echo "<h3>10. Prime Numbers from 10 to 50</h3>";

for ($num = 10; $num <= 50; $num++) {

    $isPrime = true;

    if ($num < 2) {
        $isPrime = false;
    }

    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}

?>