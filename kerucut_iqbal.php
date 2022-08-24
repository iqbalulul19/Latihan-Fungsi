<?php
$phi = 22/7;
$r = 28;
$t = 40;

function Volumekerucut ($phi, $r, $t) {
	return (1/3*$phi*$r*$r*$t);
}
echo "Volume kerucut tersebut adalah =". Volumekerucut ($phi, $r, $t). "cm";
?>