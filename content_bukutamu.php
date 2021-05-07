<html>
<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<h1 class="judul">Buku Tamu</h1>
<div class="kotak">
    <form method="post" action="proses_bukutamu.php">
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Nama Lengkap" class="input">
    <label>Email</label>
    <input type="text" nama="email" placeholder="Alamat Email" class="input">
    <label>Alamat</label>
    <input type="text" name="alamat" placeholder="Alamat" class="input">
    <label>Komentar</label>
    <textarea class="input" name="pesan" placeholder="Komentar"></textarea>
        <input type="submit" value="Kirim" class="tombol"> <input type="reset" value="Batal" class="tombol">
</form>
</div>
</body>
</html>