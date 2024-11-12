<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu - Katalog Alat Tulis Chacha</title>
    <link rel="stylesheet" type="text/css" href="stylmain.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <!-- Loader -->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>

    <!-- Media Sosial -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.instagram.com/ella.ainurriska01"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/profile.php?id=61553596682709&mibextid=JRoKGi"><i class="fab fa-facebook-square"></i></a></li>
                <li><a href="https://youtube.com/@ellaainurriska?si=PdBuAd8IO7Cx1fxP"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container">
            <h1><a href="indexmain.html">Katalog Alat Tulis Chacha</a></h1>
            <ul>
                <li><a href="indexmain.html">HOME</a></li>
                <li><a href="aboutmain.html">ABOUT</a></li>
                <li><a href="productmain.html">PRODUCT</a></li>
                <li class="active"><a href="bukutamumain.php">Buku Tamu</a></li>
            </ul>
        </div>
    </header>

    <br><br><br>
    <section class="label">
        <div class="container">
            <p>home / buku tamu</p>
        </div>
    </section>

    <div class="buku-tamu" align="center">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="fname">Nama Lengkap</label>
            <br>
            <input type="text" id="fname" name="fname">
            <br><br>

            <label for="fnim">NIM</label>
            <br>
            <input type="text" id="fnim" name="fnim">
            <br><br>

            <label for="ffakul">Fakultas</label>
            <br>
            <input type="text" id="ffakul" name="ffakul">
            <br><br>

            <label for="fmail">Email</label>
            <br>
            <input type="text" id="fmail" name="fmail">
            <br><br>

            <label for="faddress">Alamat</label>
            <br>
            <input type="text" id="faddress" name="faddress">
            <br><br>

            <input type="submit" value="Submit">
        </form>

        <div>
            <br>
            <?php
                if(isset($_POST['fname'])) {
                    $fname = $_POST['fname'];
                    $fnim = $_POST['fnim'];
                    $ffakul = $_POST['ffakul'];
                    $fmail = $_POST['fmail'];
                    $faddress = $_POST['faddress'];

                    echo "Nama Lengkap: $fname<br>";
                    echo "NIM: $fnim<br>";
                    echo "Fakultas: $ffakul<br>";
                    echo "Email: $fmail<br>";
                    echo "Alamat: $faddress<br>";
                }
            ?>
        </div>
    </div>

    <script type="text/javascript">
        var tanggalElem = document.getElementById("tanggal");
        if (tanggalElem) {
            tanggalElem.innerHTML = "Waktu Akses " + tgl;
        }

        window.setTimeout("waktu()", 1000);
        function waktu(){
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }

        var i = 0;
        function change(){
            var classJamDigital = document.getElementById("jam_digital");
            var color =["lightcoral", "maroon", "lemonchiffon", "greenyellow", "honeydew", "floralwhite", "darkturqoise", "lavenderblush", "linen"];

            classJamDigital.style.backgroundcolor = color[i];
            i = (i + 1) % color.length;
        }
        setInterval(change, 1000);
        $(document).ready(function(){
            $(".bg-loader").hide();
        });
    </script>

    <div class="footer">
        <p><b>Hak Cipta &copy; 2024 Ella Ainurriska</b></p>
    </div>
</body>
</html>
