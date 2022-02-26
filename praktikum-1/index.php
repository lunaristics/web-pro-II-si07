<?php

// membuat variable user

$name = "Lutfiah Masida Zulfa";
$umur = 18;
$berat = 41.9;

// menampilkan variable yang telah dibuat
// untuk gabungin string dan variable atau mencetak bisa pake titik (.) atau langsung tulis aja variablenya langsung
echo "<h1>Nama : " . $name . "</h1>"; 
echo "<br/>Umur : $umur";
echo "<br/>Berat : $berat";

// menampilkan variable system
echo "<br/>Dokumen root : " . $_SERVER['DOCUMENT_ROOT'];
echo "<br/>Nama File : " . $_SERVER['PHP_SELF'];

// membuat variable const
// strukturnya : define("namavariable", nilai variablenya)
Define('PHI', 3.14);
$r = 10;
$luas = PHI * $r * $r;
echo "<br/>Luas Lingkaran : $luas";