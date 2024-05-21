<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="myHeader">
        <img src="img/echaa.png" alt="Chaxiee Logo" style="width: 400px;"> 
        <h1><br><span>Chaxiee<br><span class="student-info">"I am a student at Sam Ratulangi University, Faculty of Engineering, Electrical Department, Informatics Engineering Study Program."</span></h1>
    </header>        

    <nav>
        <a href="#home">Home</a>
        <a href="#gallery">Gallery</a>
        <a href="#blog">Blog</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="home">
        <h2>🖤</h2>
        <h2>Philippians 4:13
            I can do all things through him who strengthens me.</h2>

        <h2>Life's journey is fortified by the strength found in God and family. 
            In His presence and the embrace of loved ones, we discover resilience, joy, and fulfillment. 
            Through trials and triumphs, the bonds of faith and kinship sustain us</h2>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery">
            <img src="img/Tim Posthink.png" alt="LIDM Divisi Poster Digital Pendidikan dengan Nama Tim POSTHINK. ">
            <img src="img/Poster.jpg" alt="Hasil Poster Tim POSTHINK ">
            <img src="img/lomba.jpg" alt="Lomba LIDM 4 April 2024">
            <img src="img/PLTS.jpg" alt="Workshop PLTS Likupang 16 Desember 2023">
            <img src="img/Surocup.jpg" alt="Suro Cup 23-25 Oktober 2023">
            <img src="img/HME1.jpg" alt="HME Angkatan 22 - 7 Oktober 2023">
            <img src="img/karya.jpg" alt="Foto">
            <img src="img/MD1.jpg" alt="UNITY Divisi Mobile Development - 31 Mei 2023">
            <img src="img/PAB.jpg" alt="Pertemuan PAB angkatan 22">
            <img src="img/MD2.jpg" alt="UNITY Divisi Mobile Development - 12 Oktober 2023">
            <img src="img/HME2.jpg" alt="Himpunan Mahasiswa Elektro - 13 April 2023">
            <img src="img/Baksos.jpg" alt="Bakti Sosial Angkatan 22 - 5 Agustus 2023">
        </div>
        <div class="overlay" id="overlay">
            <img src="" alt="" id="enlargedImg">
            <p id="imgCaption"></p>
        </div>
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <?php include 'blog.php'; ?>
    </section>

    <section id="contact">
        <h2>Contact</h2>

        <form class="contact-form" action="#" method="post">
            <p><a href="https://www.linkedin.com/in/reza-michelly-cantika-mawara-626a28272/"><img src="img/Linkedin_.png" style="width: 20px; vertical-align: middle;"> LinkedIn</a></p>
            <p><a href="https://www.instagram.com/echa.mawara"><img src="img/instagram.png" style="width: 20px; vertical-align: middle;"> Instagram</a></p>
            <p><a href="https://github.com/RezaMawara"><img src="img/githublogo.jpg" style="width: 20px; vertical-align: middle;"> Github</a></p>
            <p><a href="mailto:michellymawara@gmail.com"><img src="img/email.png" style="width: 20px; vertical-align: middle;"> michellymawara@gmail.com</a></p>
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>
