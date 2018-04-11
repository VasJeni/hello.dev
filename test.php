<?php
$string = '12312412415235';

echo strlen($string) . '<br>';
echo $string[1];
for ($i=0; $i < strlen($string); $i++) {
    echo $string[$i];
    echo '<br>';
    echo strlen($string) . ' strlen($string) <br> ';
}
$a = '10';
$b = '15';
$c = $a . $b;
echo $c;
if (is_string($a)) {
    echo '<br>' . '$a string';
} else {
    echo '<br>' . '$a not string';
};
if (is_string($b)) {
    echo '<br>' . '$b string';
} else {
    echo '<br>' . '$b not string';
};
if (is_string($c)) {
    echo '<br>' . '$c string';
} else {
    echo '<br>' . ' $c not string';
};
if (is_integer($c)) {
    echo '<br>' . '$c integer';
} else {
    echo '<br>' . '$c not integer';
};
 if ($a == 10) {
     echo  '<br>'.'equal';
 }

 echo '<br>'.strlen(12);