<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Security Research</title>
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <!--Icons-->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Navbar mulai-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">IP-23<span>Cyber Security Researcher</span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">About Us</a>
            <a href="#project">Projects Us</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!--Navbar beres-->
    <!--hero section start-->
    <section class="hero" id="home">
        <main class="content">
            <h1>Hai! selamat datang di website profile <span>IP23-CSIRT Perbanas</span></h1>
            <P><span>IP23-CSIRT perbanas </span>merupakan sekelompok para mahasiswa Perbanas Institute yang berfokus
                pada keamanan informasi</P>
            <a href="#" class="cta">Gabung sekarang</a>
        </main>
    </section>
    <!--hero section end-->
    <!--About Section start -->
    <section class="about" id="about">
        <h2>About <span>us</span></h2>
        <div class="row">
            <div class="about-img">
                <img src="red.jpg" alt="red">
            </div>
            <div class="content">
                <h3><span>Red</span> Team</h3>
                <p>Di dalam organisasi ini terdapat Read Team atau Penetration Tester yang berfokus dalam pengujian
                    penetrasi keamanan terhadap sebuah sistem, website, aplikasi, IoT, Cloud. Melakukan penetrasi dengan
                    cara yang terstruktur dan dapat bekerja secara etis.</p>
            </div>
        </div>
        <div class="row">
            <div class="about-img">
                <img src="Forensic.jpg" alt="red">
            </div>
            <div class="content">
                <h3><span style="color: green;">Forensic</span> Team</h3>
                <p>Di dalam organisasi ini terdapat Forensic Team Melakukan investigasi atas kejadian yang telah
                    terjaodi.</p>
            </div>
        </div>
        <div class="row">
            <div class="about-img">
                <img src="blue.jpg" alt="red">
            </div>
            <div class="content">
                <h3><span style="color: blue;">Blue</span> Team</h3>
                <p>Di dalam organisasi ini terdapat Blue Team yang berfokus dalam mengamankan terhadap sebuah sistem,
                    website, aplikasi, IoT, Cloud. Dan memiliki standar sesuai dengan skenario yang terjadi saat ini.
                </p>
            </div>
        </div>
    </section>

    <!--About Section End-->
    <!--Projects section Start-->
    <section id="project" class="project">
        <h2>Projects <span>us</span></h2>
        <p>beberapa project yang telah kami kerjakan</p>
    </section>
    <!--Projects Section End-->
    <!--end icons-->
    <script>
    feather.replace();
    </script>

    <!--js-->
    <script src="js.js"></script>
</body>

</html>