<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa - Laporan PDF</title>
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
        <h1>Laporan Siswa</h1>
    </center>
	<table class="table">
        <tr>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">NISN</th>
            <th scope="col">NIS</th>
            <th scope="col">Kelas</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Telpon</th>
            <th scope="col">Tahun SPP</th>
            
        </tr>
        <?php foreach ($siswas as $siswa): ?>
        <tr>
            <td><?php echo $siswa->nama ?></td>
            <td><?php echo $siswa->nisn ?></td>
            <td><?php echo $siswa->nis ?></td>
            <td><?php echo $siswa->nama_kelas ?></td>
            <td><?php echo $siswa->alamat ?></td>
            <td><?php echo $siswa->no_telepon ?></td>
            <td><?php echo $siswa->tahun_ajaran ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
</body>

</html>
