<?php
echo "<div align='center'>Report Buku Tamu</div>";
require("config.php");
$cari="SELECT * FROM bukutamu ORDER BY nama";
$query=mysqli_query($conn,$cari);
while($data=mysqli_fetch_array($query)){

echo "<br>";
echo "<div align='left'>";
echo "<pre>";
echo "Nama     :".$data['nama']."<br>";
echo "email    :".$data['email']."<br>";
echo "Alamat   :".$data['alamat']."<br>";
echo "Komentar :<br>".$data['pesan']."<br>";
echo "</pre>";
echo "</div>";
echo "<hr>";
}
?>