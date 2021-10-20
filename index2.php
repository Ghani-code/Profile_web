<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Project KSM</title>
</head>

<body id="maincontent">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-body rounded sticky-top fixed-top" id="navbar">
        <h2 id="logo">Project KSM</h2>
        <ul class="position-absolute top-0 end-0">
            <li id="sidebar"><a href="#">home</a></li>
            <li id="sidebar"><a href="#footer">about</a></li>
            <li id="sidebar"><a href="#profile">profile</a></li>
            <li id="sidebar"><a href="#footer">contact</a></li>
            <li class="daftar" ><a href="form.php" >Register</a></li>
        </ul>
    </nav>
    <p class="hi" >Hi, <i><?php echo $_POST["username"] ?> </i></p>
    <h1 class="position-absolute top-0 start-50 translate-middle text-light" id="judul">Project Yang Telah Di Buat</h1>
    <table class="position-absolute top-50 start-50 translate-middle table table-#000 table-sm
    table table-hover  container-xl border border-2 " id="table">
        <tr>
           <th>NO</th>
           <th>Nama Project</th>
           <th>Bahasa Pemrograman</th>
           <th>Project (klik jika ingin melihat Project)</th>
        </tr>
        <tr>
            <td>1</td>
            <td>kalkulator</td>
            <td> <img src="img/html.png" width="80px"> <img src="img/css.png" width="80px"> <img src="img/php.png"
                    width="80px"> </td>


            <td><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Project 1">
<a href="kalkulator\form.php"><img src="img/kalkulator.png" width="100px"></a></button></td>

        </tr>
        <tr>
            <td>2</td>
            <td>Soal Online</td>
            <td><img src="img/html.png" width="80px"> <img src="img/css.png" width="80px"> <img src="img/php.png"
                    width="80px"></td>
            <td><button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Project 2">

<a href="pertemuan1\index.php"><img src="img/soal.png" width="80px"></a></button></td>
        </tr>
    </table>

    <div class="profile" id="profile">
    <div class="position-absolute top-100 start-50 translate-middle text-center">
        <img src="img/imageonline-co-roundcorner.png" alt="Kemas" width="200" id="profile">
        <h1 class="display-4 light">Kemas Ghani Sampurna</h1>
        <p class="lead">Mahasiswa | Programmer</p>

    </div>
    </div>


<footer id="footer">
    <div class="footer-content">
        <h3>Portofolio</h3>
        <p>Website ini dibuat untuk memenuhi tugas yang diberi KSM Andorid</p>
        <ul class="socials">
            <li><a href="https://m.facebook.com/kemas.ghani"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://api.whatsapp.com/send?phone=6285217862489"><i class="fa fa-whatsapp"></i></a></li>
            <li><a href="https://www.instagram.com/ghani_kemas/"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://youtube.com/channel/UCnsdTCNiPwDwEmD3epYX1yg"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.linkedin.com/in/kemas-ghani-sampurna-9ab378219/"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
    <div class="fotter-bottom">
        <p>copyright &copy;2021  .  Designed by <span>Kemas Ghani Sampurna</span></p>
    </div>
</footer>
</body>

</html>