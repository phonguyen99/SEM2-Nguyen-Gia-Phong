<?php
$varl = 4;
$var2 = 15;
function multiply ( )
{
    global $varl, $var2;
$var2 = $varl * $var2;
echo $var2;
}
echo "The multiplication value of 4 * 15 =";
multiply();
?>
