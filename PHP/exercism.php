<?php

$tab_a = ['A','B','C','E','F'];
$tab_b = ['A','C','C','E','E'];

$res = array_diff_assoc($tab_a,$tab_b);

print_r($res);