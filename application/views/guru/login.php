

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>ClubMaker: Connexion enseignant</title>

    <!-- General CSS Files -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <a href="<?= base_url('welcome') ?>"> <img src="<?= base_url('assets/') ?>/img/logo.png" alt="logo" style="width: 260px;height: 70px;" class=" mb-5 mt-2"></a>
                        <h4 class="text-dark font-weight-normal">Bienvenue à <span class="font-weight-bold">ClubMaker</span>
                        </h4>
                        <p class="text-muted">Avant d'accéder à la page de l'enseignant, vous devez d'abord vous connecter en tant que
                            professeur. veuillez remplir les données ci-dessous pour continuer.</p>
                        <form method="post" action="<?= base_url('welcome/guru') ?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                Veuillez remplir les champs email
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Mot de passe</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                Veuillez remplir le champ mot de passe
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-block btn-success btn-lg btn-icon icon-right" tabindex="4">
                                S'identifier
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url('assets/') ?>stisla-assets/img/unsplash/ss.jpg">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold text-white">Bienvenue, professeur!</h1>
                                <h5 class="font-weight-normal text-muted-transparent text-white">Veuillez vous connecter à
                                    Entré dans
                                    page de l'enseignant.</h5>
                            </div>
                            Developper par &nbsp; <span class="" style="color: red"> &#10084;</span> &nbsp; Hatim LABIED & ahmed EL MOUMIN
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Start Sweetalert Flashdata -->

    <?php if ($this->session->flashdata('success-reg')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Vous l avez fait pour vous inscrire!',
                text: 'Veuillez vérifier votre e-mail, faire une vérification!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('login-success')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Vous l avez fait pour vous inscrire!',
                text: 'Maintenant, connectons-nous!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('success-verify')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Email verifié!',
                text: 'Maintenant, connectons-nous!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('success-logout')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Vous vous êtes déconnecté avec succès!',
                text: 'Au revoir, à plus tard!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('fail-login')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Échec de la connexion!',
                text: 'Veuillez vérifier à nouveau votre adresse e-mail et votre mot de passe!',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('fail-email')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Email non vérifié!',
                text: 'Veuillez d abord vérifier votre e-mail!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('fail-pass')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Mot de passe erroné!',
                text: 'Veuillez vérifier à nouveau votre mot de passe!',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('not-login')) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'S il vous plait Connectez-vous d abord!',
                text: 'S il vous plait Connectez-vous d abord!',
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    <?php endif; ?>

    <!-- End Sweetalert -->

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
    <!-- Template JS File -->
    <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
    <!-- Page Specific JS File -->
</body>

</html>