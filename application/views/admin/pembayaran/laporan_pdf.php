<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pembayaran - Laporan PDF</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #04AA6D;
        color: white;
    }
    </style>

</head>

<body>
    <center>
        <h1>Laporan Pembayaran</h1>
    </center>
	<table class="table">
        <tr>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Jumlah Bayar</th>
            <th scope="col">Nominal</th>
        </tr>
        <?php foreach ($pembayarans as $pembayaran): ?>
        <tr>
            <td><?php echo $pembayaran->nama_petugas ?></td>
            <td><?php echo $pembayaran->nama ?></td>
            <td><?php echo $pembayaran->tanggal_bayar ?></td>
            <td><?php echo $pembayaran->jumlah_bayar ?></td>
            <td><?php echo $pembayaran->nominal ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
</body>

</html>
