<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemain</title>
    <!-- Mengimpor CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Pemain</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Pemain</th>
                    <th>No Punggunng</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemainbanyak as $pemain)
                    <tr>
                        <td>{{ $pemain->id }}</td>
                        <td>{{ $pemain->nama_pemain }}</td>
                        <td>{{ $pemain->no_punggung }}</td>
                        <td>{{ $pemain->posisi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Mengimpor JS Bootstrap (opsional, jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
