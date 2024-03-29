<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style5.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header id="header" class="fixed-top"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="image\Badung.png" width="40" height="40" class="d-inline-block align-middle" alt="">
                    Disdukcapil Badung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="dusun_page.php">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Formulir
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="Dusun_Pelaporan.php">Isi Formulir Online</a></li>
                    <li><a class="dropdown-item" href="file/F2.01.pdf" download>Download Blank Form</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="Lihat_Laporan.php">Lihat Laporan</a></li>
                    <li><a class="dropdown-item" href="laporan_baru_dusun.php">Laporan Baru</a></li>
                    <li><a class="dropdown-item" href="lihat_laporan_ditolak.php">Laporan Ditolak</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Log Out</a>
                </li>
            </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            </div>
        </div>
        </nav>
    </header>
    <section class="laporan container">
        <form class="container-laporan-buku container row">
        <div class="logo col-5">
                    <img src="image\laporanbaru.png" alt="">
        </div>
        <div class="col-7 content">
            <div class="form-row mt-lg-5">
                
                <div class="form-group">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control changedata" id="dusun" disabled>
                </div>
                <div class="form-group ml-md-4">
                    <label for="desa">Kelurahan/Desa</label>
                    <input type="text" class="form-control changedata" id="desa" disabled>
                </div>
                <div class="form-group ml-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control changedata" id="kecamatan"disabled>
                </div>
            </div>
            <div class="mt-3 content" >
                    <div class="form-group row ">
                        <label for="pilihakta" class="col-3">Akta Kematian</label>
                        <select id="pilihakta" class="col-5 changedata">
                            <option value="" selected>Semua</option>
                            <option value="1">Ada</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
            </div>
            <div class="form-row mt-lg-3">
                <div class=" d-lg-inline-flex align-items-center">
                    <label>Rentang</label>
                    <div class="input-group date changedata" id="datepicker1">
                        <input type="date" class="form-control ml-4" id="dater">
                        <span class="input-group-append"></span>
                    </div>
                    <span class="ms-3">sampai</span>
                    <div class="input-group date changedata" id="datepicker2">
                        <input type="date" class="form-control ml-4" id="dates">
                        <span class="input-group-append"></span>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group mt-lg-5" style="width: 500px;">
                    <input type="text" class="form-control changedata" id="inputcari" placeholder="Cari">
                    <span class="input-group-append"></span>
                </div>
                <!-- <div class="mt-lg-5">
                    <button type="submit" class="btn btn-outline-primary ml-lg-5 justify-content-end">Export</button>
                </div> -->
            </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover mt-3">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Tanggal Meninggal</th>
                        <th scope="col">Tanggal Pemakaman</th>
                        <th scope="col">NIK Pelapor</th>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Nama Keluarga</th>
                        <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody id="laptabel">
                    </tbody>
                </table>
            </div>
            <!-- <nav aria-label="pagination">
                <ul class="pagination justify-content-end mt-lg-5">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                    <li class="page-item"><a class="page-link" href="#">1 <span class=" sr-only">(current)</span></a></li>
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> -->
        </form>
    </section>
    <!-- Footer -->
    <footer id="footer">
        <div class="footer-top mt-lg-5">
            <div class="container_footer">
                <div class="row">
                    <div class="col-lg-6 col-md-12 footer-contact mt-3">
                        <h4>Dinas Kependudukan Dan Pencatatan Sipil<span></span></h4>
                        <p>
                            Pusat Pemerintahan Mangupraja Mandala,<br> 
                            Jl. Raya Sempidi Mengwi, <br> 
                            Badung-Bali <br><br>
                            <strong>Telepon:</strong> (0361) 894980<br>
                            <strong>Email:</strong> disdukcapil@badungkab.go.id<br>
                        </p>
                    </div>
                    <!-- <div class="col-lg-4 col-md-12 footer-links mt-3">
                        <h5>Menu Tersedia</h5>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Laporan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Formulir</a></li>
                        </ul>
                    </div> -->
                    <div class="col-lg-6 col-md-12 footer-links mt-3">
                        <h5>Media Sosial Kami</h5>
                        <p>Temukan kami dalam beberapa media sosial berikut ini.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<script>
    datafl = JSON.parse(localStorage.getItem('dataUser'))
    console.log(datafl)
    $("#kecamatan").val(datafl['nama_kecamatan']);
    $("#desa").val(datafl['nama_desa']);
    $("#dusun").val(datafl['nama_dusun']);

    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();
    today2 = yyyy + '-' + mm + '-' +  dd;
    $("#dater, #dates").attr({'max':today2})

    $.ajax({
        type: 'GET',
        url: "datasignup.php?aksi=get_lapobaru&id_dusun="+datafl['kode_dusun'],
        success: function(data) {
            dataFull = JSON.parse(data)
            count = 1
            $("#laptabel").empty()
            Object.keys(dataFull).forEach(function(key){
                $("#laptabel").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['hub_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['status']+"</td></tr>");
                count++
            })
            localStorage.setItem("DataLapbarudusun", JSON.stringify(dataFull));
        }
    });

    $(".changedata").change(function(){
        datachange()
    })

    $(".changedata").keyup(function(e){
        datachange()
        if(e.keyCode == 8){datachange()}
    })

    function datachange(){
        kecamatan = datafl['kode_kecamatan']
        desa      = datafl['kode_desa']
        dusun     = datafl['kode_dusun']
        pilihakta = $("#pilihakta").children("option:selected").val();
        awal      = $("#dater").val()
        akhir     = $("#dates").val()
        search    = $("#inputcari").val()

        $.ajax({
            type: 'GET',
            url: "datasignup.php?aksi=get_lapobaru2&kecamatan="+kecamatan+"&desa="+desa+
                "&dusun="+dusun+"&pilihakta="+pilihakta+"&awal="+awal+"&akhir="+akhir+"&search="+search,
            success: function(data) {
                dataFull = JSON.parse(data)
                count = 1
                $("#laptabel").empty()
                Object.keys(dataFull).forEach(function(key){
                    $("#laptabel").append("<tr>"+
                                        "<td scope='col'>"+count+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_m']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['tanggal_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['NIK_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['nama_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['hub_p']+"</td>"+
                                        "<td scope='col'>"+dataFull[key]['status']+"</td></tr>");
                    count++
                })
                localStorage.setItem("DataLapbarudusun", JSON.stringify(dataFull));
            }
        });
    }

</script>