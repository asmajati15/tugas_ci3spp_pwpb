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
        <h1>Laporan Petugas</h1>
    </center>
	<table class="table">
        <tr>
            <th scope="col">Nama Petugas</th>
            <th scope="col">Username</th>
            
        </tr>
        <?php foreach ($petugass as $petugas): ?>
        <tr>
            <td><?php echo $petugas->nama_petugas ?></td>
            <td><?php echo $petugas->username ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
</body>

</html>
