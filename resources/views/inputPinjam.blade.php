<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Buku</title>
</head>

<body>
    <form action="pinjam-buku" method="POST">
        <label for="nama-buku">Nama Buku</label>
        <input type="text" id="nama-buku" name="nama-buku">
        <label for="nama-peminjam-buku">Nama Peminjam Buku</label>
        <input type="text" id="nama-peminjam-buku" name="nama-peminjam-buku">
        <label for="no-ho">Nomor HP</label>
        <input type="text" id="no-ho" name="no-ho">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <label for="tanggal-pengembalian-buku">Tanggal Pengembalian Buku</label>
        <input type="date" id="tanggal-pengembalian-buku" name="tanggal-pengembalian-buku">
        <button type="submit">Pinjam</button>
    </form>
</body>

</html>
