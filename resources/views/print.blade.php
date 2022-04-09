<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>
</head>
<body>
<div class="container">
        <h2>SMK Wikrama Bogor</h2>
        <h4>Penerimaan Peserta Didik Baru</h4>
        <hr>
        <div class="m-auto">
            <p>Nama Lengkap: {{$registrations->nama}}</p>
            <p>Nomor Daftar: {{$registrations->id}}</p>
            <p>Jenis kelamin: {{$registrations->jk}}</p>
            <p>Alamat Lengkap: {{$registrations->alamat}}</p>
            <p>Agama: {{$registrations->agama}}</p>
            <p>Asal SMP: {{$registrations->asal}}</p>
            <p>Jurusan: {{$registrations->jurusan}}</p>
        </div>
    </div>
<script>
    window.print();
</script>
</body>
</html>