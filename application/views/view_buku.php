<html>
<head>
    
    <title>Data Buku</title>
</head>
<body>

<table border="1px solid black">
        <tr>
            <th>ID BUKU</th>
            <th>JUDULBUKU</th>
            <th>ID KATEGORI</th>
            <th>PENGARANG</th>
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>ISBN</th>
            <th>STOK</th>
            <th>DIPINJAM</th>
            <th>DIBOOKING</th>
            <th>IMG</th>
        </tr>
        <?php foreach ($buku as $bk) : ?>
            <tr>
                <td> <?php echo $bk['id_buku']; ?> </td>
                <td> <?php echo $bk['judul_buku']; ?> </td>
                <td> <?php echo $bk['id_kategori']; ?> </td>
                <td> <?php echo $bk['pengarang']; ?> </td>
                <td> <?php echo $bk['penerbit']; ?> </td>
                <td> <?php echo $bk['tahun_terbit']; ?> </td>
                <td> <?php echo $bk['isbn']; ?> </td>
                <td> <?php echo $bk['stok']; ?> </td>
                <td> <?php echo $bk['dipinjam']; ?> </td>
                <td> <?php echo $bk['diboking']; ?> </td>
                <td> <?php echo $bk['image']; ?> </td>

                <?php endforeach; ?>

    </table>



</body>
</html>