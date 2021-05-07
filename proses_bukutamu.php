<?php
// fungsi file ini untuk menyimpan input dari content ke database
$nama-$_REQUEST['nama'];//meminta at pesan nameid yang bernama-"nama" dan dimasukkan dalam variabel $nama
$email-$_REQUEST['email'];//meminta at pesan nameid yg bernama-"email" dan dimasukkan dalam variabel $email
$alamat-$_REQUEST['alamat'];//meminta at pesan nameid yang bernama-"alamat" dan dimasukkan dalam variabel $alamat
$pesan-$_REQUEST['pesan'];//meminta at pesan name id yang bernama-"pesan" dan dimasukkan dalam variabel $pesan

require("config.php");//memanggil file php yang dibutuhkan
$sql-"INSERT INTO bukutamu (id,nama,email,alamat,pesan) VALUES ('','$nama','$email','$alamat','$pesan')";//memasukkan data kedalam tabel bukutamu dengan field nama, email, alamat, pesan sebagai variabel $nama,$email,$alamat,$pesan dimasukkan dalam variabel $sql
$query=mysqli_query($conn,$sql);//merekam data yang sudah dimasukkan at disimpan
if($query){
echo "<script>alert('Data Sudah disimpan');history.go(-1);</script>";
header("location:bukutamu.php");
//jika data berhasil disimpan
}else{
echo "<script>alert('Data gagal disimpan');history.go(-1);</script>";
//ika data gagal disimpan
}
?>