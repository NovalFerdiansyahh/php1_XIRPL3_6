<?php
$value = 'achmatim';
$valeu2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $valeu2, time()+3600);

echo "<h1>Ini halaman pengeseatan cookie</h1>";

echo "<h2>Klik <a href='cookie02.php'>disini</a> untuk pemeriksaan cookies</h2>";
?>