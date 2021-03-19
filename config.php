<?php

function rupiah($angka)
{

	// $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
	$hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
	return $hasil_rupiah;
}
 
// echo rupiah(1000000);
