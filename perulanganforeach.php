<?php 
$books= [
	"panduan belajar PHP untuk pemula",
	"membangun aplikasi web dengan",
	"Totorial PHP dan MySQl",
	"Membuat Chat bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach ($books as $buku) {
	echo "<li>$buku</li>";
	# code...
}
echo "</ul>";
 ?>