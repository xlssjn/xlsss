<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leLah1 - Portofolio</title>
    <link rel="stylesheet" href="styaleIndex.css">
    <script src="https://kit.fontawesome.com/65bc213130.js" crossorigin="anonymous"></script>
    
<body>
    <nav>
        <div class="logo-nama">afrzlelah</div>
        <div class="nav-link">
            <ul>
                <li><a class="nav-a" href="#beranda">Beranda</a></li>
                <li><a class="nav-a" href="#projects">Projects</a></li>
                <li><a class="nav-a" href="#myschool">My School</a></li>
                <li><a class="nav-a" href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- BAGIAN ISI selamat datang -->

    <div class="container">
        <div class="background"> </div>
        <div class="background2"></div>
        <div class="background3">
            <h1 class="judul">Welcome </h2>
                <h2 class="judul2">And lets here</h2>
                <pre>
       Lets Have Fun With Me Friends
       Get's Started
    </pre>
                <div class="logo">
                    <i id="btn" onclick="Toggle()"  class=" far fa-heart  fa-xl" ></i>
                   

                </div>

        </div>
    </div>
    <!-- Isi ke duaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa lets begin -->
    <div class="container--2">
        <div class="portofolio">
            <img class="gambarku" src="./assets/img/cwk11 - Copy.jfif">
            <div class="informasi">
                <h2 class="biodata-h2">Halllo Rencang-rencang 🤗</h2>

                <p>Nama Saya Afrizal Anwar Zulfani</p>
                <p>Saya lahir diGunungpati kota Semarang</p>
                <p>Saya menempuh pendidikan di <a class="ppaska" href="www.ppaska.co.id"> Ponpes Askhabulkahfi</a>
                </p>
                <p>Saya masih menduduki bangku sekolah jenjang SMK</p>
                <p>Jurusan TKJ</p>
            </div>
            <div class="sosmed"> 
                <a href="www.instgram.com"><img src="assets/img/smile.svg"></a>
                <a><img src="assets/img/smile.svg"></a>
                <a><img src="assets/img/smile.svg"></a>
                <a><img src="assets/img/smile.svg"></a>
            </div>
        </div>
    </div>

    <!-- isi kedua berahirrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->
    <!-- isi keitgaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
    <div class="container--3">
        <div class="box-card"></div>
        <div class="card-1"></div>
        <div class="card-2"></div>
        <div class="card-3"></div>
    </div>

    <script>

        var btn = document.getElementById('btn');

        function Toogle() { 
            if(btn.classList.contains("far")){
            btn.classList.remove("far");
            btn.classList.add("fas");
        }
            
        }
    </script>

</body>

</html>