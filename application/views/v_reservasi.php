<html>

<head>
    <title>Data Input Reservasi</title>
</head>

<body>
    <center>
        <br>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mata Kuliah </th>
            </tr>
            <tr>
                <td colsplan="3" <hr> </td>
            </tr>
            <tr>
                <th>NIK</th>
                <th>:</th>
                <td> <?= $nik; ?> </td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <th>:</th>
                <td> <?= $nama; ?> </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td> <?= $jkelamin; ?> </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td> <?= $alamat; ?> </td>
            </tr>
            <tr>
                <th>Tipe</th>
                <th>:</th>
                <td> <?= $tipe; ?> </td>
            </tr>
            <tr>
                <th>Tanggal Check-In</th>
                <th>:</th>
                <td> <?= $tgl; ?> </td>
            </tr>
            <tr>
                <th>Lama Inap</th>
                <th>:</th>
                <td> <?= $lama; ?> </td>
                <br>
            </tr>
            <br>
            <tr>
                <td colspan="3" align="center"><br> <br><a class="kembali" href="<?= base_url('index.php/reservasi'); ?>">Kembali</a> <br></td>
            </tr>
        </table>
        <br><br>
    </center>
</body>

</html>