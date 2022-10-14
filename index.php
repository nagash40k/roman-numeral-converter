<?php

include 'classes/Roman.php';


$num = new Roman();


echo $num->toRoman(5);
echo '<br/>';

echo $num->toRoman(0);
echo '<br/>';
echo $num->toRoman(-5);
echo '<br/>';

echo $num->toRoman(3);
echo '<br/>';

echo '***********************<br/>';

echo '1';
var_dump($num->toArabic('I'));
echo '<br/>';

echo '3';
var_dump($num->toArabic('III'));
echo '<br/>';

echo '9';
var_dump($num->toArabic('IX'));
echo '<br/>';

echo '190';
var_dump($num->toArabic('CXC'));
echo '<br/>';

echo '99';
var_dump($num->toArabic('XCIX'));
echo '<br/>';

echo '49';
var_dump($num->toArabic('XLIX'));
echo '<br/>';

echo '100';
var_dump($num->toArabic('C'));
echo '<br/>';

echo '500';
var_dump($num->toArabic('D'));
echo '<br/>';

echo '450';
var_dump($num->toArabic('CDL'));
echo '<br/>';

echo '559';
var_dump($num->toArabic('DLIX'));
echo '<br/>';

echo '666';
var_dump($num->toArabic('DCLXVI'));
echo '<br/>';

echo '738';
var_dump($num->toArabic('DCCXXXVIII'));
echo '<br/>';

echo '889';
var_dump($num->toArabic('DCCCLXXXIX'));
echo '<br/>';

echo '899';
var_dump($num->toArabic('DCCCXCIX'));
echo '<br/>';

echo '900';
var_dump($num->toArabic('CM'));
echo '<br/>';

echo '999';
var_dump($num->toArabic('CMXCIX'));
echo '<br/>';