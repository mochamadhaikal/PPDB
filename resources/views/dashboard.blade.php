<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>PPDB Sekolah | Dashboard</title>
</head>
<body>
@include('components._navbar')
    <div class="container">
        <div class="d-flex p-3">
                <a href="/registrasi" class="btn btn-primary" type="button">Tambah</a>
                <a href="/registrasi/bulk-print" target="_blank" class="btn btn-warning ms-2" >Cetak Semua Laporan</a>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
            <strong>{{ $message }}</strong>
        </div>
        @endif

        <table id="example" class="table table-light">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Agama</th>
                <th scope="col">Asal SMP</th>
                <th scope="col">Minat Jurusan</th>
                <th scope="col">Action</th>
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
                        <td class="d-flex">
                            <a href="/registrasi/{{$register->id}}/edit" class="btn btn-info border-0">Edit</a>
                            <form action="/registrasi/{{$register->id}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="ms-2 btn btn-danger border-0" onclick="return confirm('Apakah yakin data akan dihapus?');">Hapus</button>
                            </form>
                            <a href="/registrasi/{{$register->id}}/print" target="_blank" class="ms-2 btn btn-warning border-0">Cetak</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('components._footer')
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>
</body>
</html>