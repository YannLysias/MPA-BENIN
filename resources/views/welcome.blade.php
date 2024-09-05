<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MPA Bénin </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="/assets/img/mpa.jpeg">

  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .active {
    color:  #0b5e1e;
    border-bottom: 3px solid #0b5e1e;

  }
  </style>
</head>

<body>

  @include('layouts.header')

@if (session('success'))
    <script>
        window.onload = function() {
            alert('{{ session('success') }}');
        }
    </script>
@endif
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Mouvements des <br>Peuples Africains</h1>
      <h2>Bienvenue chez vous, bienvenue chez nous !</h2>
      <a href="/inscrire/create" style="background-color: #0b5e1e; border: none;" class="btn-get-started">Adhérer</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ ('img/Africa.png') }}" class="img-fluid" alt="image" style=" width : 650px; height: 650px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2 style=" font-weight: bold;">Présentation</h3>
            <p class="fst-italic">
                Vous êtes <b>citoyen béninois,</b> vivant sur le territoire <b>national</b> ou de la <b>diaspora</b>, soucieux du développement harmonieux, inclusif et durable de notre pays.
                 Vous désirez participer efficacement à la <b>construction</b> concrète de notre nation commune par vos <b>idées</b>, vos <b>compétences</b> et vos <b>cotisations.</b>
                Rejoignez par le biais de cette plateforme <b>le Mouvement des Peuples Africains (MPA)</b>.
                 Vous y retrouverez des <b>hommes</b> et des <b>femmes</b> de toute condition, préoccupés d’un avenir radieux pour les <b>filles</b> et <b>fils</b> de notre pays le BENIN, du continent AFRICAIN, et décidés à faire la <b>politique</b> autrement.
            </p>
            <ul>
                <li><b>Le MPA, c’est la garantie</b></li>

                    <ol>• Du respect scrupuleux de la constitution ;</ol>
                    <ol>• De la promotion de l'unité et la cohésion nationale ; </ol>
                    <ol>• De la préservation de la paix et de la stabilité sociale ;</ol>
                    <ol>• Promouvoir le patriotisme, la fraternité, la justice et le travail dans la paix ;</ol>
                    <ol>• De la participation active et en toute légalité à la vie socio politique et économique de votre pays ;</ol>
                    <ol>• De l’éducation des populations en vue d’élever leur niveau de conscience politique et d’assurer leur participation effective et responsable à la vie politique, économique et sociale de la patrie ;</ol>
            </ul>
            <ul>
                <li><b>Pour réaliser cette vision, le MPA BENIN oriente stratégiquement ses objectifs vers la réalisation d’actions prioritaires que sont :</b></li>
                    <ol>•  L’impulsion d’un développement durable et harmonieux de la Patrie à travers la territorialisation des politiques publiques au sein d’entités territoriales viables et aménagées ;</ol>
                    <ol>•  L’éduction civique et morale pour restaurer nos valeurs cardinales républicaines et démocratiques ; </ol>
                    <ol>•  La construction et la préservation de la paix et stabilité sociale.</ol>
            </ul>
            <p>Bienvenue chez vous, bienvenue chez nous .</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">
        <div class="row counters justify-content-center">
          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #0b5e1e;" data-purecounter-end="{{$totalAdherants}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Adhérent{{$totalAdherants > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #0b5e1e;" data-purecounter-end="{{$totalCoordonnateur}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Coordonnateur{{$totalCoordonnateur > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #0b5e1e;" data-purecounter-end="{{$totalDiaspora}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Diaspora{{$totalDiaspora > 1 ? 's' : ''}}</p>
          </div>

          <div class="col-lg-3 col-6 text-center mx-auto">
            <span data-purecounter-start="0" style="color: #0b5e1e;" data-purecounter-end="{{$totalUser}}" data-purecounter-duration="1" class="purecounter"></span>
            <p>Total d'enregistrement</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Why Us Section ======= -->
    {{-- <section id="why-us" class="why-us" style="background-color: #0b5e1e; color: #fff;">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" style="background-color: #0b5e1e; color: #fff;">
            <div class="content" style="background-color: #0b5e1e; color: #fff;">
              <h3>Présentation</h3>
              <p>
                Notre plateforme est dédiée à rassembler des individus engagés dans la promotion du développement
                national et dans la réalisation de changements positifs au sein de notre société. En devenant membre,
                vous rejoignez une communauté dynamique qui œuvre activement pour le progrès et l'amélioration de notre pays.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" style="background-color: #0b5e1e; color: #fff;" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section --> --}}

        <!-- ======= Testimonials Section ======= -->


    <!-- ======= Features Section ======= -->
    <section id="features" class="features mt-5">
      <h2 style="text-align: center; padding: 20px; font-weight: bold;">Les adhérents par département</h2>
      <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
              @foreach($departements as $departement)
              <div class="col-md-3">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{ $departement->libelle }}</h5>
                          <p class="card-text"> <span class="font-bold">{{ $departement->nombre_adherents }}</span> Adhérent{{$departement->nombre_adherents > 1 ? 's' : ''}}</p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>

  <style>
    .card {
        margin-bottom: 20px;
        border: 1px solid #0b5e1e;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease; /* Ajout d'une transition fluide pour l'effet de survol */
    }

    .font-bold {
        font-weight: 800;
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 18px;
        font-weight: bold;
    }

    .card-text {
        font-size: 16px;
    }
</style>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container flex py-4">

      <div class="text-center">
        <div class="copyright">
          &copy; 2024 Mouvement des Peuples Africains <strong></strong>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #0b5e1e; color: #fff;"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
