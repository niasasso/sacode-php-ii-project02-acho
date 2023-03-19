<?php 

	/*
	membuat variabel nilai dengan tipe data boolean
	*/
	$nilaiA = true;
	$nilaiB = false;
	$nilaiC = false;

	// menampilkan nilai variabel

	echo "Nilai A : " . $nilaiA . "<br>";
	echo "Nilai B : " . $nilaiB . "<br>";
	echo "Nilai C : " . $nilaiC . "<br>";

	// membuat garis horizontal dengan tag HTML
	echo "<hr>";

	// menampilkan tipe data dan nilai variabel
	echo var_dump($nilaiA) . "<br>";
	echo var_dump($nilaiB) . "<br>";
	echo var_dump($nilaiC) . "<br>";

 ?>