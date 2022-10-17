<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPP - Laporan PDF</title>
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
        <h1>Laporan SPP</h1>
    </center>
	<table class="table">
        <tr>
            <th scope="col">Tahun Ajaran</th>
            <th scope="col">Nominal</th>
        </tr>
        <?php foreach ($spps as $spp): ?>
        <tr>
            <td><?php echo $spp->tahun_ajaran ?></td>
            <td><?php echo $spp->nominal ?></td>
        </tr>
        <?php endforeach; ?>
	</table>
</body>

</html>
