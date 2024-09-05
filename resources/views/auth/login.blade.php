<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login - MPA-BENIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="/assets/img/mpa.jpeg">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/vendor/simple-datatables/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/authentication.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4" style="background-image: url('../img/ceauBenin.png')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-14 mx-auto">
                    <div class="card px-4 flex gap-4 py-5">
                        <div class=" d-flex flex-column align-items-center">
                            <img src="assets/img/mpa.jpeg" width="120px" alt="" class="img-fluid">
                            <h5 class="card-title text-success pt-2 fs-5 fw-bold">Connexion</h5>
                            <p class="text-center small"></p>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="yourUsername" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" placeholder="exemple@email.com" required autofocus>
                                </div>
                                @error('email')
                                <div class="d-block text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="yourPassword" class="form-label">Mot de passe</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" placeholder="password" id="yourPassword" required>
                                    <span class="input-group-text">
                                        <i class="fa fa-eye-slash" id="passwordVisibility" style="cursor: pointer;"></i>
                                    </span>
                                </div>
                                @error('password')
                                <div class="d-block text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Souvenez-vous de moi</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-success w-100" type="submit">Se connecter</button>
                            </div>

                            <div>
                                <p class="small mb-0 text-center">
                                    <a href="{{ route('password.request') }}" class="text-success">Mot de passe oublié ?</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/chart.js/chart.umd.js"></script>
  <script src="/vendor/echarts/echarts.min.js"></script>
  <script src="/vendor/quill/quill.min.js"></script>
  <script src="/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/vendor/tinymce/tinymce.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>
  <script src="/js/passwordVisibility.js"></script>

</body>

</html>
