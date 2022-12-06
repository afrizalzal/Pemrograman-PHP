<?php
require 'Pegawai.php';

$naomi = new Pegawai('066', 'Afrizal', 'Manager', 'Kristen Katholik', 'Menikah');
$fuad  = new Pegawai('018', 'Yuyun Afinda', 'Asmen', 'Islam', 'Menikah');
$mina  = new Pegawai('099', 'Ale Afga', 'Staff', 'Kristen Protestan', 'Menikah');
$xuang = new Pegawai('088', 'Helmi', 'Kabag', 'Konghuchu', 'Belum Menikah');
$eimi  = new Pegawai('069', 'Ihsan', 'Manager', 'Budha', 'Menikah');

echo '<h3 align="center">' . Pegawai::PT . '</h3>';
$naomi->mencetak();
$fuad->mencetak();
$mina->mencetak();
$xuang->mencetak();
$eimi->mencetak();
echo 'Jumlah Pegawai: ' . Pegawai::$jml;