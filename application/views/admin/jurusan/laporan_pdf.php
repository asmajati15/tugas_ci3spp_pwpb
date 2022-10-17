<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jurusan - Laporan PDF</title>
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
        <h1>Laporan Jurusan</h1>
    </center>
	<table class="table">
        <tr>
            <th scope="col">Nama Jurusan</th>
            
        </tr>
        <?php foreach ($jurusans as $jurusan): ?>
        <tr>
            <td><?php echo $jurusan->nama_jurusan ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
</body>

</html>
