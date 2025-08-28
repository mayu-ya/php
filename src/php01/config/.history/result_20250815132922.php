<?php
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'],ENT_QUOTES);
$number = htmlspecialchars($_POST['number'],ENT_QUOTES);
print "お名前は" . $name . "<br>";
print "ご注文商品は" . $radio . "<br>";
print "注文数は" . $number . "<br>";