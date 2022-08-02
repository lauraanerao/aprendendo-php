<?php

use Carbon\Carbon;
require '/home/laura/Projetos/laura/html/vendor/autoload.php';

//$to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
//$from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2016-6-6 9:30:34');
//$diff_in_months = $to->diffInYears($from);
//print_r($diff_in_months); // Output: 1

$days = 400;
echo Carbon::now()->subDays($days)->diff()->format('%y years, %m months and %d days');

echo "<hr>";

$hoje = new DateTime('2017-03-28');
$futuro = new DateTime('2017-07-14');
$dif = $hoje->diff($futuro);
echo $dif->format('%R%a days');

?>
