<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PPDB SMK Wikrama Bogor</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
    @include('components._navbar')

        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background-image: url('assets/gedung.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="assets/wikrama.jpg" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">PPDB SMK Wikrama Bogor</h1>
                <a href="/registrasi" class="btn btn-primary" type="button">Daftar Sekarang</a>
            </div>
        </header>

        <!-- Content section -->
        <section id="scroll">
            <div class="container px-5 mt-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <iframe width="420" height="315"
                        src="https://www.youtube.com/embed/_V8ZWxAcGY4?autoplay=1&mute=1">
                        </iframe>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-8">SMK Unggul dan Berprestasi Tingkat Nasional</h2>
                            <p>SMK Wikrama Bogor Satu dari 20 SMK Penerima Penghargaan "SMK Unggul dan Berprestasi" di Indonesia dari Kementrian Pendidikan dan Kebudayaan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Content section -->
        <section>
            <div class="container px-5 mt-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <iframe width="420" height="315"
                        src="https://www.youtube.com/embed/_KYS5MT48tM?autoplay=1&mute=1">
                        </iframe>  
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-8">Pembelajaran Tatap Muka Terbatas</h2>
                            <p>SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat, jadi kamu gak perlu khawatir lagi !</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @include('components._footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
