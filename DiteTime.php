<?php 



$time = new DateTime();
$time->setDate(2003, 4, 27 );
$time->setTime(10, 20, 10, 0);

$time->add(new DateInterval("P1Y")); // menambah 1 tahun

$minuter = new DateInterval("P12M"); // mengurangi 12 bulan
$minuter->invert= true;
$time->add($minuter);
var_dump($time);

// MENGUBAH TIMEZONE
$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($date);


// MENGUBAH FORMAT WAKTU
$tahun = $date->format("Y-m-d ");
$waktu = $date->format("H:i:s ");
echo "Tahun saat ini $tahun dan waktunya $waktu " . PHP_EOL;

// MENGUBAH KESELURUHAN
$sayWaktu = DateTime::createFromFormat("Y-m-d H:i:s","2023-04-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
// PARSING WAKTU DI PHP
if ($sayWaktu){
    var_dump($sayWaktu);
}else{
    echo "Format Waktu Salah" . PHP_EOL;
}

?>