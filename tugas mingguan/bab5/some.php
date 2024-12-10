<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="some.css" />
        <script src="some.js"></script>
    </head>
    <body onload="hidePreloader()">
        <div id="preloader">Halaman Web Berhasil Ditampilkan</div>
        <div id="content">
            <div class="overlap-wrapper">
                <div class="overlap">
                    <div class="frame">
                        <a href="login.php" class="text-wrapper">DAFTAR</a>
                    </div>
                    <div class="div-wrapper">
                        <a href="regis.php" class="div">Login</a>
                    </div>
                    <img class="add-apps-perspective" src="./logo figma/addplus.png" />
                    <div class="overlap-group">
                        <p class="si">
                            <span class="span">Selamat Datang<br />Di </span>
                            <span class="text-wrapper-3">settimana sunday</span>
                        </p>
                        <img class="les" src="./logo figma/les.png" />
                    </div>
                    <p class="sesuaikan-kebutuhan">
                        <span class="text-wrapper-4">Sesuaikan Kebutuhan </span>
                        <span class="text-wrapper-5">Belajar</span>
                        <span class="text-wrapper-4">Bersama Kami</span>
                    </p>
                    <div class="overlap-2">
                        <div class="navbar">
                            <ul class="nav-links" margin-right="20px">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Biaya Les</a></li>
                                <li><a href="#">Daftar Pelajaran</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                            <div class="group">
                                <div class="overlap-group-2">
                                    <div class="rectangle"></div>
                                    <div class="text-wrapper-10">
                                        <input type="text" placeholder="Cari sesuatu..." class="search-input" />
                                        <button class="search-btn">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="gatau-removebg" src="./logo figma/gatau-removebg-preview.png" />
                         
                    </div>
                </div>
            </div>
                <div class="greeting">
                    <?php
                        $t = date("H");
                        if ($t < "10") {
                        echo "Have a good morning!";
                        } elseif ($t < "20") {
                        echo "Have a good day!";
                        } else {
                        echo "Have a good night!";
                        }
                        ?>  
                </div>
        </div>           
    </body>
</html>
