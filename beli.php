<?php
session_start();
//-- Mendapatkan id produk dari url --//
$id_produk = $_GET['id'];

//-- Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1 --// 
if(isset($_SESSION['keranjang'][$id_produk])) 
{
	$_SESSION['keranjang'][$id_produk]+=1;
}

//-- Jika beluk ada di keranjang, maka produk itu dianggap dibeli 1 --//
else
{
	$_SESSION['keranjang'][$id_produk] = 1;
}



//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";


// Alihkan ke halaman keranjang
echo "<script>alert('Produk telah masuk ke halaman keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>