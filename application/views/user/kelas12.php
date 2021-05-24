

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <!-- Title -->
    <title>Bienvenue - <?php
                            $data['user'] = $this->db->get_where('siswa', ['email' =>
                            $this->session->userdata('email')])->row_array();
                            echo $data['user']['nama'];
                            ?> - Page d'étudiant ClubMaker</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/user_style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('assets/') ?>img/logo.png" alt="" style="width: 260px;height: 70px;"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hi, <?php
                                                                                                        $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                                                        $this->session->userdata('email')])->row_array();
                                                                                                        echo $data['user']['nama'];
                                                                                                        ?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('user') ?>">Accueil</a>
                            </li>
                            <li class="nav-item "><a class="nav-link text-danger" href="<?= base_url('welcome/logout') ?>">Se déconnecter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400" style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down" data-aos-duration="1400">Veuillez sélectionner un sujet!
                    </h1>
                    <p>Bonjours les étudiants! , Ceci est une page d'apprentissage de l'érable! Veuillez sélectionner le sujet que vous souhaitez
                        accéder
                        et une formation de vidéos et de cours prêts à être visionnés! Bon apprentissage, étudiants!</p>
                    <hr>
                    <h4 data-aos="fade-down" data-aos-duration="1700"><?php
                                                                        $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                        $this->session->userdata('email')])->row_array();
                                                                        echo $data['user']['nama'];
                                                                        ?> :ClubMaker Students</h3>
                        <h5>Sujets d'Robotics</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->
    <br>
    <!-- Start Lesson Card -->
    <div class="container">
     <div class="row">
        <div class="col">
       
            <div class="col d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right" >
                <a href="<?= base_url('materi/matematika_xii') ?>">
                    <div class="card-kelas">
                        <img src="<?= base_url('assets/') ?>img/formation.png" class="card-img-top" alt="..." style="border-radius: 28px;border: 2px solid orangered;height:80px;">
                    </div>
                </a>
            </div>
            <br>
            <div class="col d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?= base_url('materi/ipa_xii') ?>">
                    <div class="card-kelas">
                        <img src="<?= base_url('assets/') ?>img/enligne.png" class="card-img-top" alt="..." style="border-radius: 28px;border: 2px solid orangered;height:80px;">
                    </div>
                </a>
            </div>
            <br>
            <div class="col d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-left">
                <a href="<?= base_url('materi/indo_xii') ?>">
                    <div class="card-kelas">
                        <img src="<?= base_url('assets/') ?>img/test.png" class="card-img-top" alt="..." style="border-radius: 28px;border: 2px solid orangered;height:80px;">
                    </div>
                </a>
            </div>
            <br>
            <div class="col d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right">
                <a href="<?= base_url('materi/inggris_xii') ?>">
                    <div class="card-kelas">
                        <img src="<?= base_url('assets/') ?>img/actualite.png" class="card-img-top" alt="..." style="border-radius: 28px;border: 2px solid orangered;height:80px;">
                    </div>
                </a>
            </div>
            <br>
            <div class="col d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?= base_url('materi/agama_xii') ?>">
                    <div class="card-kelas">
                        <img src="<?= base_url('assets/') ?>img/examen.png" class="card-img-top" alt="..." style="border-radius: 28px;border: 2px solid orangered;height:80px;">
                    </div>
                </a>
            </div>
            </div>
        
        
        <div class="col">
        <div class="row">
        <div class="col">
                <img data-aos="fade-up" data-aos-duration="1800" src="<?= base_url('assets/') ?>img/illustrations/Online_Courses.svg" alt="" srcset="" >
                </div>
                <div class="w-100 d-none d-md-block"></div>
                <br>
                <div class="col" style="padding-left:170px;">
                <h1 data-aos="fade-up" data-aos-duration="1800" style="text-align: center;border-radius: 10px 100px / 120px;border: 2px solid orangered;width:350px;"> Bon courage</h1>
                </div>
                </div>
        </div>
        
    </div>
</div>
   
  
    <br>

    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Animate On Scroll -->