<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/styles.css" rel="stylesheet" />
    <title>PPDB | Registrasi</title>
</head>
<body>
    @include('components._navbar')
    <div class="container">
        <form action="{{URL::to('/registrasi')}}" method="post">
                    @csrf
                <h2 class="my-3">Form Registrasi</h2>
                <fieldset class="form-group mb-2">
                    <label for="exampleInputPassword1">Nama Lengkap</label>
                    <input type="text" max="255" class="form-control" name="nama" id="exampleInputPassword1" required placeholder="Nama">
                </fieldset>
                <fieldset class="form-group mb-2">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jk" id="optionsRadios1" value="Laki-Laki" checked="">
                        Laki-Laki
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jk" id="optionsRadios2" value="Perempuan">
                        Perempuan
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group mb-2">
                    <label for="exampleInputPassword1">Alamat Lengkap</label>
                    <input type="text" max="255"  class="form-control" name="alamat" id="exampleInputPassword1" required placeholder="Alamat">
                </fieldset>
                <fieldset class="form-group mb-2">
                    <label for="exampleSelect1" class="form-label">Agama</label>
                    <select class="form-select form-control" name="agama" id="exampleSelect1" required>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                </fieldset>
                <fieldset class="form-group mb-2">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text" max="255"  class="form-control" name="asal" id="exampleInputPassword1" required placeholder="Asal Sekolah">
                </fieldset>
                <fieldset class="form-group mb-2">
                    <label for="exampleSelect1" class="form-label">Jurusan</label>
                    <select class="form-select form-control" name="jurusan" id="exampleSelect1" required>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Kompouter dan Jaringan</option>
                        <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                        <option value="Bisnis Pemasaran dan Daring">Bisnis Pemasaran dan Daring</option>
                        <option value="Tata Boga">Tata Boga</option>
                        <option value="Perhotelan">Perhotelan</option>
                    </select>
                </fieldset>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>