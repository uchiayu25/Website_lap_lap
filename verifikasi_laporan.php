<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pelaporan(Dusun)</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style4.css">
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
                    <a class="nav-link" href="desa_page.php">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dusun
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="daftar_dusun.php">Daftar Dusun</a></li>
                    <li><a class="dropdown-item" href="tambah_dusun.php">Tambah Dusun Baru</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pengguna
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="daftar_admin_dusun.php">Daftar Admin Dusun</a></li>
                    <li><a class="dropdown-item" href="admin_dusun_baru.php">Admin Dusun Baru</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Laporan
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="lihat_laporan_desa.php">Lihat Laporan</a></li>
                    <li><a class="dropdown-item" href="laporan_baru.php">Laporan Baru</a></li>
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
    <!-- Formulir -->
    <section class="formulir" style="margin-top: 7em;">
        <form class="container">
            <div class="form-group align-right">
                <div class="input-group col-md-2">
                    <input type="text"  class="form-control" id="thedate" disabled>
                    <span class="input-group-append"></span>
                </div>
            </div>
            <div class="logo text-center">
                <img src="image\formulir.png" class= "mt-lg-5 " alt="">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dusun">Pertugas</label>
                    <input type="text" class="form-control" id="petugas" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="dusun">Dusun</label>
                    <input type="text" class="form-control" id="dusun" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kelurahan">Kelurahan/Desa</label>
                    <input type="text" class="form-control" id="desa" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputNIKPelapor">No Kartu Keluarga</label>
                    <input type="text" class="form-control" id="inputKK" placeholder="Nomor Kartu Keluarga" disabled>
                </div>
                <div class="form-group col-6">
                    <label for="inputNIK">NIK</label>
                    <input type="text" class="form-control" id="inputNIK" placeholder="NIK" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNama">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap"disabled>
            </div>
            <div class="form-group">
                <label for="inputAlamant">Alamat Lengkap</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Lengkap" disabled>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputjenkel">Jenis Kelamin</label>
                    <select id="inputjenkel" class="form-control" disabled>
                        <option selected>Pilih  </option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="inputAnak">Anak ke-</label>
                    <input type="text" class="form-control" id="inputanak" placeholder="1,2,3,dan sebagainya" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputtempat">Tempat Meninggal</label>
                    <select id="inputtempat" class="form-control"  disabled>
                        <option selected>Pilih</option>
                        <option value="Rumah Sakit">Rumah Sakit</option>
                        <option value="Rumah">Rumah</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <label for="inputlainnya">Lainnya</label>
                    <input type="text" class="form-control" id="inputlainnya" placeholder="Silahkan ditulis" disabled>
                </div>
            </div>
            <div class="form-row">  
                <div class="form-group col-md-4">
                    <label for="date">Tanggal Meninggal</label>
                    <div class="input-group date" id="datepicker2">
                        <input type="date" class="form-control" id="datem" disabled>
                            <span class="input-group-append"></span>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="date">Waktu Meninggal</label>
                    <div class="input-group input-group-lg">
                        <input type="time" step="2" class="form-control timepicker" value="00:00:00" id="waktu" disabled> 
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </div>
                    </div>
                </div>    
                <div class="form-group col-md-4">
                    <label for="inputState">Tanggal Pemakaman</label>
                    <div class="input-group date" id="datepicker3">
                        <input type="date" class="form-control" id="datep" disabled>
                            <span class="input-group-append"></span>
                    </div>
                </div>
                
            </div>
            
            <!-- <div class="form-group">
                <label for="inputAkta">Akta Kematian</label>
                    <div class="col-sm-10">
                        <div class="form-check" id="pilakta">
                            <label class="form-check-label isi col-1">
                                <input class="form-check-input radio-inline" type="radio" name="akta" id="akta1" value="1"disabled>
                                Ada</label>
                                <label class="form-check-label isi col-1">
                                    <input class="form-check-input radio-inline" type="radio" name="akta" id="akta2" value="0"disabled>
                                    Tidak</label>
                            <div class="form-check form-check-inline col-sm-6">
                                <input type="text" class="form-control" id="inputakta" placeholder="Nomer Akta" disabled>
                            </div>
                        </div>
                    </div>
            </div> -->
            <div class="form-row">
                <div class="form-group col-6">
                    <label for="inputNIKPelapor">NIK Pelapor</label>
                    <input type="text" class="form-control" id="inputNIKPelapor" placeholder="NIK Pelapor" disabled>
                </div>
                <div class="form-group col-6">
                    <label for="inputNamaPelapor">Nama Lengkap Pelapor</label>
                    <input type="text" class="form-control" id="inputNamaPelapor" placeholder="Nama Lengkap Pelapor" disabled>
                </div>
            </div>
            <div class="form-row">
                <div class="form- col-6">
                    <label for="inputKeluarga">Nama Anggota Keluarga yang Bisa Dihubungi</label>
                    <input type="text" class="form-control" id="inputKeluarga" placeholder="Nama Anggota Keluarga" disabled>
                </div>
                <div class="form-group col-6">
                    <label for="inputTelepon">Nomor Telepon</label>
                    <input type="text" class="form-control" id="inputTelepon" placeholder="Nomor Telepon / HP / WA" disabled>
                </div>
            </div>
            <div class="form-row">    
                <div class="form-group col-6">
                    <label>Berkas</label><br>
                    <!-- <input type="file" class="form-control" id="ktp_input" placeholder="Pilih File"> -->
                    <a href="" download id="input_ktp">Download Berkas Persyaratan</a><br>
                    <!-- <a href="" download id="input_kk">Download Kartu Keluarga</a><br>
                    <a href="" download id="input_skk">Download Surat Keterangan Kematian</a><br>
                    <a href="" download id="input_berkas">Download Berkas Pendukung Lainnya</a> -->
                </div>
                <div class="form-group col-6">
                    <textarea name="" id="komentar" cols="50" rows="4" placeholder="Alasan Laporan Ditolak"></textarea>
                </div>
            </div>
            <div class="mt-lg-5 text-right">
                <button type="button" class="btn btn-primary rounded-pill" id="verifikasi">Verifikasi</button>
                <button type="button" class="btn btn-danger rounded-pill" id="tolak">Tolak</button>
                <button type="button" class="btn btn-secondary rounded-pill" id="cancel">Kembali</button>
            </div>
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
    
<script type="text/javascript">
    $(document).ready(function() {
        datafl = JSON.parse(localStorage.getItem('DataLapdesabaru'))[<?= $_GET["key"]?>]
        console.log(datafl)
        $("#petugas").val(datafl['nama_lengkap_kepdusun'])
        $("#thedate").val(datafl['date_lapor']);
        $("#kecamatan").val(datafl['nama_kecamatan']);
        $("#desa").val(datafl['nama_desa']);
        $("#dusun").val(datafl['nama_dusun']);
        $("#inputKK").val(datafl['no_kk'])
        $("#inputanak").val(datafl['no_anak'])
        $("#inputNIK").val(datafl['NIK_m']);
        $("#inputNamaLengkap").val(datafl['nama_m']);
        $("#inputjenkel").val(datafl['jenis_kelamin']);
        if(datafl['tempat_m']=="Rumah" || datafl['tempat_m']=="Rumah Sakit"){
            $("#inputtempat").val(datafl['tempat_m']);
            $("#inputlainnya").val("");
        } else{
            $("#inputtempat").val("lainnya");
            $("#inputlainnya").val(datafl['tempat_m']);

        }
        $("#inputAlamat").val(datafl['alamat']);
        $("#datem").val(datafl['tanggal_m']);
        $("#datep").val(datafl['tanggal_p']);

        // var date             = datafl['waktu_meninggal'];
        // alert(date)
        function padTo2Digits(num) {
            return num.toString().padStart(2, '0');
            }
        function formatDate(date) {
        return (
            // [
            // padTo2Digits(date.getMonth() + 1),
            // padTo2Digits(date.getDate()),
            // date.getFullYear(),
            // ].join('/') +
            // ' ' +
            [
            padTo2Digits(date.getHours()),
            padTo2Digits(date.getMinutes()),
            padTo2Digits(date.getSeconds()),
            ].join(':')
            );
        }
        // var day = date.getDate();
        // var month = date.getMonth() + 1;
        // var year = date.getFullYear();
        // var hours = date.getHours();
        // var minutes = date.getMinutes();
        // var second = date.getSeconds();
        var displayTime = formatDate(new Date(datafl['waktu_meninggal']));
        // alert(displayTime)
        $("#waktu").val(displayTime);
        
        // if(datafl['kode_akta']==0){
        //     $("#akta2").attr({'checked':true})
        //     $("#inputakta").val("");
        // } else if(datafl['kode_akta']==1){
        //     $("#akta1").attr({'checked':true})
        //     $("#inputakta").removeAttr("disabled");
        //     $("#inputakta").val(datafl['no_akta']);
        // }

        $("#inputNIKPelapor").val(datafl['NIK_p']);
        $("#inputNamaPelapor").val(datafl['nama_p']);
        $("#inputKeluarga").val(datafl['hub_p']);
        $("#inputTelepon").val(datafl['no_hp']);
        var url1 = "file/ktp/"+datafl['ktp'] ;
        $('#input_ktp').attr({target: '_blank', href : url1});

        // var url2 = "file/kartu_keluarga/"+datafl['kk'] ;
        // $('#input_kk').attr({target: '_blank', href : url2});

        // var url3 = "file/skk/"+datafl['skk'] ;
        // $('#input_skk').attr({target: '_blank', href : url3});

        // if(datafl['berkas']==""){
        //     $('#input_berkas').css("display", "none");
        // } else{
        //     $("#input_berkas"). css("display", "block");
        //     var url4 = "file/berkas/"+datafl['berkas'] ;
        //     $('#input_berkas').attr({target: '_blank', href : url4});
        // }

        // $("$input_ktp").attr("href", "file/ktp/"+datafl['ktp']);
        // $("$input_kk").attr("href", "file/kartu_keluarga/"+datafl['kk']);
        // $("$input_skk").attr("href", "file/skk/"+datafl['skk']);

        $('#cancel').on('click', function() {
            location.replace('laporan_baru.php');
        });

        $('#tolak').on('click', function() {
            $("#komentar").removeClass("is-invalid")
            komentar    = $("#komentar").val()
            errorTotal         = 0
            if(komentar==""){errorTotal++;$("#komentar").addClass("is-invalid");alert("Komentar Wajib Diisi")}
            if(errorTotal>0){return}
            $.ajax({
                type: 'GET',
                url: "datasignup.php?aksi=tolak_lapo&id_laporan="+datafl['id_laporan']+"&komentar="+komentar,
                success: function(data) {
                    alert("laporan ditolak")
                    location.replace('laporan_baru.php');
                }
            });
        });

        $('#verifikasi').on('click', function() {
            $("#inputKK").removeClass("is-invalid")
            $("#inputanak").removeClass("is-invalid")
            $("#thedate").removeClass("is-invalid")
            $("#dusun").removeClass("is-invalid")
            $("#desa").removeClass("is-invalid")
            $("#kecamatan").removeClass("is-invalid")
            $("#inputNIK").removeClass("is-invalid")
            $("#inputNamaLengkap").removeClass("is-invalid")
            $("#inputtempat").removeClass("is-invalid")
            $("#inputAlamat").removeClass("is-invalid")
            $("#inputjenkel").removeClass("is-invalid")
            $("#inputlainnya").removeClass("is-invalid")
            $("#datem").removeClass("is-invalid")
            $("#datep").removeClass("is-invalid")
            // $('input[name="akta"]').removeClass("is-invalid")
            // $("#inputakta").removeClass("is-invalid")
            $("#inputNIKPelapor").removeClass("is-invalid")
            $("#inputNamaPelapor").removeClass("is-invalid")
            $("#inputKeluarga").removeClass("is-invalid")
            $("#inputTelepon").removeClass("is-invalid")

            tanggal_lapor      = $("#thedate").val()
            no_anak            = $("#inputanak").val()
            no_kk              = $("#inputKK").val()
            dusun              = $("#dusun").val()
            desa               = $("#desa").val()
            kecamatan          = $("#kecamatan").val()
            NIK_m              = $("#inputNIK").val()
            jenis_kelamin      = $("#inputjenkel option:selected").val()
            nama_lengkap_m     = $("#inputNamaLengkap").val()
            alamat             = $("#inputAlamat").val()
            tempat             = $("#inputtempat option:selected").val()
            if (tempat == "lainnya"){
                tempat = $("#inputlainnya").val()
            }
            var date             = new Date($('#datem').val());
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            date_m = [year, month, day].join('-');

            var time             = $('#waktu').val();
            var hours = time.split(":")[0];
            var minutes = time.split(":")[1];
            var second = time.split(":")[2];
            // var suffix = hours >= 12 ? "pm" : "am";
            // hours = hours % 12 || 12;
            // hours = hours < 10 ? "0" + hours : hours;
            waktu = date_m + ' ' + [hours, minutes, second].join(':');

            var date             = new Date($('#datep').val());
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();
            date_p = [year, month, day].join('-');
            // data_akta          = $('input[name="akta"]:checked').val();
            // var no_akta = "";
            // if (data_akta == 1){
            //     no_akta =  $("#inputakta").val();
            // }
            NIK_p              = $("#inputNIKPelapor").val()
            nama_lengkap_p     = $("#inputNamaPelapor").val()
            hub_p              = $("#inputKeluarga").val()
            telepon            = $("#inputTelepon").val()
            komentar           = $("#komentar").val()
            // if (komentar == ""){
            //     komentar       = $("#komentar").val("tidak ada")
            // }else{
            //     komentar       = $("#komentar").val()
            // }
            errorTotal         = 0

            var form_data = new FormData();
            
            if(tanggal_lapor==""){errorTotal++;$("#thedate").addClass("is-invalid")}
            if(isNaN(parseInt(NIK_m)) || NIK_m.length!=16){errorTotal++;$("#inputNIK").addClass("is-invalid")}
            if(nama_lengkap_m==""){errorTotal++;$("#inputNamaLengkap").addClass("is-invalid")}
            if(dusun==""){errorTotal++;$("#dusun").addClass("is-invalid")}
            if(desa==""){errorTotal++;$("#desa").addClass("is-invalid")}
            if(no_anak==""){errorTotal++;$("#inputanak").addClass("is-invalid")}
            if(isNaN(parseInt(no_kk)) || no_kk.length!=16){errorTotal++;$("#inputKK").addClass("is-invalid")}
            if(kecamatan==""){errorTotal++;$("#kecamatan").addClass("is-invalid")}
            if(tempat==""){errorTotal++;$("#inputtempat").addClass("is-invalid")}
            if(jenis_kelamin==""){errorTotal++;$("#inputjenkel").addClass("is-invalid")}
            if(alamat==""){errorTotal++;$("#inputAlamat").addClass("is-invalid")}
            // if(data_akta==""){errorTotal++;$('#input[name="akta"]').addClass("is-invalid")}
            // if (data_akta == 1){
            //     if(no_akta==""){errorTotal++;$("#inputakta").addClass("is-invalid")}
            // }
            if(date_m==""){errorTotal++;$("#datam").addClass("is-invalid")}
            if(date_p==""){errorTotal++;$("#datap").addClass("is-invalid")}
            if(waktu==""){errorTotal++;$("#waktu").addClass("is-invalid")}
            if(isNaN(parseInt(NIK_p)) || NIK_p.length!=16){errorTotal++;$("#inputNIKPelapor").addClass("is-invalid")}
            if(nama_lengkap_p==""){errorTotal++;$("#inputNamaPelapor").addClass("is-invalid")}
            if(hub_p==""){errorTotal++;$("#inputKeluarga").addClass("is-invalid")}
            if(telepon==""){errorTotal++;$("#inputTelepon").addClass("is-invalid")}
            if(errorTotal>0){return}

            form_data.append("action","verifikasi_laporan");
            form_data.append("tanggal_lapor",tanggal_lapor);
            form_data.append("NIK_m",NIK_m);
            form_data.append("nama_lengkap_m",nama_lengkap_m);
            form_data.append("dusun",datafl['kode_dusun']);
            form_data.append("desa",datafl['kode_desa']);
            form_data.append("kecamatan",datafl['kode_kecamatan']);
            form_data.append("tempat",tempat);
            form_data.append("no_anak",no_anak);
            form_data.append("no_kk",no_kk);
            form_data.append("alamat",alamat);
            form_data.append("no_hp",telepon);
            form_data.append("jenis_kelamin",jenis_kelamin);
            form_data.append("date_m", date_m)
            form_data.append("date_p", date_p)
            form_data.append("waktu", waktu);
            // form_data.append("komentar", komentar);
            // form_data.append("data_akta", data_akta)
            // form_data.append("no_akta", no_akta)
            form_data.append("NIK_p",NIK_p);
            form_data.append("nama_lengkap_p",nama_lengkap_p);
            form_data.append("hub_p",hub_p);
            form_data.append("id_laporan",datafl['id_laporan']);
            $.ajax({
                url: 'datasignup.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                evalScripts:true,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function(response){
                    alert("Laporan diverifikasi")
                    location.replace('lihat_laporan_desa.php');
                }
            });
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>