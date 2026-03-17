<?php

if(isset($_POST['name'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "fakihsabikul17@gmail.com";
$subject = "Pesan dari Portfolio";

$body = "Nama: $name\nEmail: $email\nPesan:\n$message";

@mail($to,$subject,$body);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Fakih — Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/png" href="assets/assets/img/logo2.png">

</head>

<body>

<?php include "components/navbar.php"; ?>

<section id="home" class="hero">
<div class="container">

<div class="row align-items-center">

<div class="col-md-6">

<h1 class="fw-bold mb-3">
<span id="typing"></span><span class="cursor">|</span>
</h1>

<p class="text-secondary">
Saya siswa Rekayasa Perangkat Lunak yang sedang belajar
web development dan tertarik membangun aplikasi berbasis web.
</p>

<a href="#contact" class="btn btn-dark mt-3 me-2">
Let's Connect
</a>

<a href="assets/assets/cv-fakih.pdf" class="btn btn-outline-light mt-3" download>
Download CV
</a>

</div>

<div class="col-md-6 text-center">

<div class="profile-wrapper">
<img src="assets/assets/img/im2.png" class="profile-img">
</div>

</div>

</div>

</div>
</section>

<section id="about" class="py-5 reveal">
<div class="container">

<div class="row">

<div class="col-md-6">

<h2 class="section-title mb-3">About Me</h2>

<p>
Halo, saya Fakih, seorang siswa jurusan Rekayasa Perangkat Lunak yang tertarik
pada pengembangan web. Saya mulai belajar pemrograman dari HTML dan CSS,
kemudian mulai mencoba membuat aplikasi web sederhana menggunakan PHP
dan database MySQL.
</p>

<p>
Saat ini saya masih terus belajar dan mencoba mengembangkan kemampuan
di bidang web development serta memahami bagaimana membangun aplikasi
yang lebih terstruktur dan efisien.
</p>

</div>

<div class="col-md-6">

<div class="about-box">

<h5>Quick Info</h5>

<ul class="list-unstyled mt-3">

<li>📍 Ciamis, Jawa Barat, Indonesia</li>
<li>🎓 Software Engineering Student</li>
<li>💻 Learning Web Development</li>
<li>🚀 Interested in Backend</li>

</ul>

</div>

</div>

</div>

</div>
</section>

<section id="skills" class="py-5 reveal">
<div class="container">

<h2 class="section-title mb-5">Skills</h2>

<div class="row">

<div class="col-md-6">

<div class="d-flex justify-content-between">
<p>HTML</p>
<span>90%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-html skill-bar"></div>
</div>

<div class="d-flex justify-content-between">
<p>CSS</p>
<span>80%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-css skill-bar"></div>
</div>

<div class="d-flex justify-content-between">
<p>JavaScript</p>
<span>30%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-js skill-bar"></div>
</div>

</div>

<div class="col-md-6">

<div class="d-flex justify-content-between">
<p>PHP</p>
<span>60%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-php skill-bar"></div>
</div>

<div class="d-flex justify-content-between">
<p>MySQL</p>
<span>60%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-mysql skill-bar"></div>
</div>

<div class="d-flex justify-content-between">
<p>Git</p>
<span>55%</span>
</div>

<div class="progress mb-4">
<div class="progress-bar skill-git skill-bar"></div>
</div>

</div>

</div>

</div>
</section>

<section id="projects" class="py-5 reveal">
<div class="container">

<h2 class="mb-5 section-title">Projects</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="project-card">
<h5>Website Perpustakaan</h5>
<p>Aplikasi CRUD buku dengan PHP & MySQL.</p>
<button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#project1">
<i class="bi bi-box-arrow-up-right"></i> View
</button>
</div>
</div>

<div class="col-md-4">
<div class="project-card">
<h5>Portfolio Website</h5>
<p>Website personal menggunakan Bootstrap.</p>
<button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#project1">
<i class="bi bi-box-arrow-up-right"></i> View
</button>
</div>
</div>

<div class="col-md-4">
<div class="project-card">
<h5>Simple Login System</h5>
<p>Sistem login sederhana dengan session PHP.</p>
<button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#project1">
<i class="bi bi-box-arrow-up-right"></i> View
</button>
</div>
</div>

</div>

</div>

<div class="modal fade" id="project1" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content bg-dark text-light">

<div class="modal-header border-0">
<h5 class="modal-title">Website Perpustakaan</h5>
<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">
<p>
Aplikasi CRUD sederhana menggunakan PHP & MySQL, 
fitur tambah, edit, hapus buku, dan login admin.
</p>
</div>

<div class="modal-footer border-0">
<a href="#" class="btn btn-primary">Live Demo</a>
<a href="#" class="btn btn-outline-light">Source Code</a>
</div>

</div>
</div>
</div>
</section>

<section id="contact" class="py-5 reveal">
<div class="container">

<h2 class="section-title mb-5">Contact</h2>

<div class="row">

<div class="col-md-6">

<p>
Kalau mau ngobrol soal project, coding, atau sekadar diskusi teknologi,
boleh banget hubungi saya lewat form ini.
</p>

<div class="social-icons mt-4">

<a href="mailto:fakihsabikul17@gmail.com" class="icon-link">
<i class="bi bi-envelope"></i>
</a>

<a href="https://instagram.com/fakihsbikul_" target="_blank" class="icon-link">
<i class="bi bi-instagram"></i>
</a>

<a href="https://github.com/fakihsabikull" target="_blank" class="icon-link">
<i class="bi bi-github"></i>
</a>

</div>

</div>

<div class="col-md-6">

<form method="POST">

<div class="mb-3">
<input type="text" name="name" class="form-control" placeholder="Your Name">
</div>

<div class="mb-3">
<input type="email" name="email" class="form-control" placeholder="Your Email">
</div>

<div class="mb-3">
<textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
</div>

<button class="btn btn-dark">Send Message</button>

</form>

</div>

</div>

</div>
</section>

<button id="topBtn">
<i class="bi bi-arrow-up"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>