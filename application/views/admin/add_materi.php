

<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth !important;">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ajouter des données de cour: ClubMaker </title>
    <!-- General CSS Files -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
</head>

<body>


    <!-- Start Sidebar -->
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class=" navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" style="margin-bottom:4px !important;" src="../assets/stisla-assets/img/avatar/avatar-2.png" class="rounded-circle mr-1 my-auto">
                            <div class="d-sm-none d-lg-inline-block" style="font-size:15px;">Hello, <?php
                                                                                                    $data['user'] = $this->db->get_where('admin', ['email' =>
                                                                                                    $this->session->userdata('email')])->row_array();
                                                                                                    echo $data['user']['username'];
                                                                                                    ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Admin : ClubMaker</div>
                            <a href="<?= base_url('welcome/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Se déconnecter
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand text-danger">
                        <div>
                            <a href="<?= base_url('admin') ?>" style="font-size: 30px;font-weight:900;font-family: 'Poppins', sans-serif;" class="text-success text-center"><i style="font-size: 30px;" class="fas fa-graduation-cap"></i> |
                                ClubMaker  </a>
                        </div>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="<?= base_url('admin') ?>">CMa>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header ">Dashboard</li>
                        <li class="nav-item dropdown ">
                            <a href="<?= base_url('admin') ?>" class="nav-link"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        </li>
                        <li class="menu-header">Gestion des étudiants<</li>
                        <li class="nav-item dropdown ">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i>
                                <span>Élèves</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_siswa') ?>">Données des étudiants</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Gestion des formateurs</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-chalkboard-teacher"></i>
                                <span>profs</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_guru') ?>">Données de profs</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/add_guru') ?>">Ajouter des profs</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-header">La gestion du cours</li>
                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-book"></i>
                                <span>cours</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/data_materi') ?>">Données de cours</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/tambah_materi') ?>">Ajouter des cours</a>
                                </li>

                            </ul>
                        </li>
                        <li class="menu-header">À propos du développeur</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-address-card"></i>
                                <span>Developer</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="<?= base_url('admin/about_developer') ?>">À propos de
                                        Fabricant</a>
                                </li>
                                <li><a class="nav-link" href="<?= base_url('admin/about_learnify') ?>">À propos de
                                        ClubMaker</a>
                                </li>
                            </ul>
                        </li>
                </aside>
            </div>
            <!-- End Sidebar -->

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="">
                        <div class="card" style="width:100%;">
                            <div class="card-body">
                                <h2 class="card-title" style="color: black;">Ajouter des données coursles</h2>
                                <hr>
                                <p class="card-text"> lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum.
                                </p>
                                <a href="#detail" class="btn btn-success">Je comprends et
                                    veux continuer ⭢</a>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="col-md-12 text-center">
                                <p class="registration-title font-weight-bold display-4 mt-4" style="color:black; font-size: 50px;">
                                Ajouter le cours</p>
                                <p style="line-height:-30px;margin-top:-20px;">Veuillez remplir les données requises
                                    en dessous de </p>
                                <hr>
                            </div>
                            <div id="detail" class="card-body">
                                <form method="POST" enctype="multipart/form-data" action="<?= base_url('admin/tambah_materi') ?>">
                                    <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px">
                                        <form method="post" enctype="multipart/form-data" action="<?= base_url('guru/add_materi') ?>">
                                            <input type="hidden" name="id">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="inputEmail4">Nom de l'enseignant</label>
                                                    <input autocomplete="off" required type="text" list="nama_guru" onkeyup="autofill()" id="namaguru" name="nama_guru" class="form-control">
                                                    <small>La liste des enseignants est déjà disponible en saisie semi-automatique, vous seul
                                                        cliquez simplement sur la zone de saisie ou en écrivant le nom et
                                                        cliquez sur l'enseignant à sélectionner.</small>
                                                    <datalist id=nama_guru>
                                                        <?php
                                                        include "koneksi.php";
                                                        $qry = mysqli_query($koneksi, "SELECT nama_guru From guru");
                                                        while ($t = mysqli_fetch_array($qry)) {
                                                            echo "<option value='$t[nama_guru]'>";
                                                        }
                                                        ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nom du sujet</label>
                                                <input type="text" class="form-control" name="nama_mapel" id="nama_mapel" required placeholder="Veuillez sélectionner un nom d'enseignant valide pour que le nom du sujet apparaisse" readonly>
                                                <small>Si le nom du sujet a changé, cela signifie le nom de votre professeur
                                                    l'entrée dans la zone de saisie est valide! sinon le nom de l'érable apparaît
                                                    Vous devez cliquer sur la zone de saisie du nom de l'enseignant et sélectionner un enseignant disponible
                                                    là.</small>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input required type="file" name="video" required class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Télécharger
                                                            Vidéo
                                                            cours ici
                                                        </label>
                                                            
                                                    </div>
                                                </div>
                                            </div>
                                    
                                           <a href="http://g.co/meet/yourmeetingname"><button style="background:#fff;border-radius: 3px;width:100%;height:40px;"><h5>🎥  Créer réunion Classe google meet🔴🔵🟡</h5> </button></a> <br><br>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Description de cours</label>
                                                <textarea class="form-control" required name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputState">Classe</label>
                                                <select required id="inputState" name="kelas" class="form-control">
                                                    <option selected>Sélectionnez ici</option>
                                                    <option value="Astronomy">Astronomy</option>
                                                    <option value="Aeronotics">Aeronotics</option>
                                                    <option value="Robotics">Robotics</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Ajouter
                                                le cours ⭢</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br>
                    </div>
                </section>
            </div>
        </div>
        <!-- End Main Content -->

        <!-- Start Footer -->
        <footer class="main-footer">
            <div class="text-center">
                Copyright &copy; 2021 <div class="bullet"></div><a href="https://ensem.ac.ma">Hatim LABIED & Ahmed EL MOUMIN</a>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- General JS Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            function autofill() {
                var nama_guru = $("#namaguru").val();
                $.ajax({
                    url: '../autofill.php',
                    data: "nama_guru=" + nama_guru,
                }).done(function(data) {
                    var json = data,
                        obj = JSON.parse(json);
                    $('#nama_mapel').val(obj.nama_mapel);
                });
            }
        </script>
        <script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
        <!-- JS Libraies -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <!-- Template JS File -->
        <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
        <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
        <!-- Page Specific JS File -->
</body>

</html>