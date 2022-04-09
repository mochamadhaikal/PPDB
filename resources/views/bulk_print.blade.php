<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Semua Laporan</title>
</head>
<body>
    <div class="container">
        <h2>SMK Wikrama Bogor</h2>
        <h4>Penerimaan Peserta Didik Baru</h4>
    <table class="table table-light">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Agama</th>
                <th scope="col">Asal SMP</th>
                <th scope="col">Minat Jurusan</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($registrations as $register)
                    <tr>
                        <td>{{ $register->id }}</td>
                        <td>{{ $register->nama }}</td>
                        <td>{{ $register->jk }}</td>
                        <td>{{ $register->alamat }}</td>
                        <td>{{ $register->agama }}</td>
                        <td>{{ $register->asal }}</td>
                        <td>{{ $register->jurusan }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <script >
        window.print();
    </script>
</body>
</html>