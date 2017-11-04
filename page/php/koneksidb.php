<?php
$host="localhost";
$nama_db = "project_dui";
$sambung = mysql_connect($host,"root","");

mysql_select_db($nama_db,$sambung) or die("Koneksi ke $nama_db gagal");

?>