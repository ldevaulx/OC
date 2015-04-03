<?php
echo "début<br>";
echo date_default_timezone_get().'<br>';

$date = strtotime('1970-01-01 00:00:00');
echo date('Y-m-d H:i:s', $date).'<br>'; //"1970-01-01 00:00:00"


$date = new DateTime('1970-01-01 00:00:00');
echo $date->format('Y-m-d H:i:s') . '<br>';

$date = strtotime('');
echo date('Y-m-d H:i:s', $date).'<br>'; //"1970-01-01 00:00:00"

$date = new DateTime('');
echo $date->format('Y-m-d H:i:s').'<br>';

// test tableaux
$tab = [];
if ($tab)
    echo 'plein 1'.'<br>';

$tab = ['1'];
if ($tab)
    echo 'plein 2'.'<br>';


if (toto) {
    # code...
}
