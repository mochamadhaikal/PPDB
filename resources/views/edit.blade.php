<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/styles.css" rel="stylesheet" />
    <title>Edit | PPDB</title>
</head>
<body>
@include('components._navbar')
    <div class="container">
        <form action="/registrasi/{{$registrations->id}}" method="post" class="mb-3 mt-3">

            @method('put')
            @csrf
            <h2 class="my-3">Form Edit Data PPDB</h2>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{$registrations->nama}}" name="nama" aria-describedby="nama" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="edit-male-check" value="Laki-Laki">
                    Laki-Laki
                    </label>
                </div>
                <div class="form-check mb-2">
                    <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="jk" id="edit-female-check" value="Perempuan">
                    Perempuan
                    </label>
                </div>
                <!-- <input type="text" class="form-control" value="{{$registrations->jk}}" name="jk" aria-describedby="jk"> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input type="text" class="form-control" value="{{$registrations->alamat}}" name="alamat" aria-describedby="alamat" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Agama</label>
                <select class="form-select form-control" name="agama" id="edit-religion" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Chu">Kong Hu Chu</option>
                </select>
                <!-- <input type="text" class="form-control" value="{{$registrations->agama}}" name="agama" aria-describedby="agama"> -->
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Asal SMP</label>
                <input type="text" class="form-control" value="{{$registrations->asal}}" name="asal" aria-describedby="asal" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Minat jurusan</label>
                <select class="form-select form-control" name="jurusan" id="exampleSelect1" required>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Kompouter dan Jaringan</option>
                        <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                        <option value="Bisnis Pemasaran dan Daring">Bisnis Pemasaran dan Daring</option>
                        <option value="Tata Boga">Tata Boga</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                <!-- <input type="text" class="form-control" value="{{$registrations->jurusan}}" name="jurusan" aria-describedby="jurusan"> -->
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    @include('components._footer')
    
</body>
</html>
