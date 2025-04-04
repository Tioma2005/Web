<?php
$str = 'ahb acb aeb aeeb adcb axeb cxxc cbbc ceec bccccb';
$pattern = '/c..c/';
preg_match_all($pattern, $str, $matches);
print_r($matches[0]);
?>