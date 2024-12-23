<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>clean</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet"><script>
    // Fonction pour afficher les champs en fonction du rôle sélectionné
    function showFields() {
        const role = document.getElementById("role").value;
        const hospitalFields = document.getElementById("hospitalFields");
        const needBloodFields = document.getElementById("needBloodFields");
        const donorFields = document.getElementById("donorFields");

        // Cacher tous les champs
        hospitalFields.style.display = "none";
        needBloodFields.style.display = "none";
        donorFields.style.display = "none";

        // Afficher les champs correspondants au rôle sélectionné
        if (role === "hospital") {
            hospitalFields.style.display = "block";
        } else if (role === "need_blood") {
            needBloodFields.style.display = "block";
        } else if (role === "donor") {
            donorFields.style.display = "block";
        }
    }

    // Gérer la soumission du formulaire
    document.getElementById("registrationForm").addEventListener("submit", function(e) {
        e.preventDefault();
        const role = document.getElementById("role").value;
        
        if (role === "donor") {
            window.location.href = "service.html"; // Redirection vers la page d'accueil des donneurs
        } else if (role === "need_blood") {
            window.location.href = "team.html"; // Redirection vers la page d'accueil des personnes ayant besoin de sang
        } else if (role === "hospital") {
            window.location.href = "testimonial.html"; // Redirection vers la page d'accueil des hôpitaux
        }
    });
</script>

</head>

<body style="background-color: aliceblue "!important>

                            

    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->

        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand  p-0">
                    <h8 class="text-white m-0" >
                    <i class="bi bi-droplet-fill"></i>





<i class="text-light m-0">Hayat</i>
<h8 class="text-danger m-0"><i>Link</i></h8>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home" style="font-size:20px;color:white"></i>
                        </a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="login.php" class="nav-item nav-link">Administration</a>
                        <a href="menu.html" class="nav-item nav-link">Menu</a>
                       
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                 
                                <a href="booking.html" class="dropdown-item">inscription</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="booking.html" class="btn btn-danger py-2 px-4">Participer</a>
                </div>
            </nav>
<div class="bg-image" style="background:rgba(0,0,0,0.4) url('img/slider3.jpg');background-blend-mode: darken;; background-size: cover; background-position: center; background-repeat: no-repeat; filter: brightness(1.2); height: 100vh;">
    <div class="container-xxl py-5 hero-header">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft text-right">
                        Hayat<span class="text-danger">Link</span>: Donnez de la Vie, Partagez l'Espoir
                    </h1>
                    <a href="booking.html" class="btn btn-danger py-2 px-4 text-center">Participer</a>
                </div>
            </div> 
        </div>
    </div>
</div>


        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-danger mb-4"></i>
                                <h5>Nos Héros Médicaux</h5>
                                <p>Des professionnels engagés pour vous et pour chaque vie.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <i class="bi bi-heart-fill" style="color: red; font-size: 2em;"></i>
                                <h5>Sauver des Vies</h5>
<p>Chaque don de sang aide à redonner espoir et santé à ceux dans le besoin.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <i class="bi bi-door-open" style="color: red; font-size: 2em;"></i>
                                <h5>Accessibilité Permanente</h5>
<p>Nous sommes là à chaque instant.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                            <h5><i class="bi bi-clock" style="color: red; font-size: 2em;"></i>
                                <h5>Disponible 24/24</h5>
<p>Notre plateforme est ouverte à tout moment </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/contact-img.png">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/pp2.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/pp.jpeg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/signup-bg.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-danger fw-normal" style="color: blue;">About Us</h5>
                        <h1 class="mb-4">Bienvenue sur <i class="fa fa-heartbeat text-danger me-2"></i>HayatLink</h1>
                        <p class="mb-4">Votre don peut sauver des vies. Rejoignez-nous pour offrir le cadeau de la vie à travers les dons de sang. Ensemble, nous pouvons faire la différence et aider ceux qui en ont besoin.</p>
<p class="mb-4">Sur HayatLink, nous connectons les donneurs avec ceux qui ont un besoin urgent de sang. Chaque goutte compte—faites partie de notre mission pour apporter espoir et santé à ceux qui en ont le plus besoin.</p>
 <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-info px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Années d'</p>
<h6 class="text-uppercase mb-0">Expérience</h6>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-info px-3">
                                    <h1 class="flex-shrink-0 display-5 text-danger mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                    <p class="mb-0">Les plus populaires</p>
<h6 class="text-uppercase mb-0">Héros du Don</h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-danger py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
              
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-heartbeat fa-2x text-danger"></i>
                                <div class="ps-3">
                                    <small class="text-body">Populaire</small>
                                    <h6 class="mt-n1 mb-0">Don de Sang</h6>
                                </div>
                            </a>
                        </li>
                        
                       
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/prepa.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Préparation pour le Don</span>
                                        <span class="text-danger">Gratuit</span>
                                    </h5>
                                    <small class="fst-italic">Avant de donner du sang, assurez-vous de vous bien préparer. Une bonne hydratation et une alimentation saine sont essentielles.</small>
                               </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/O+.png" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Don de sang O+</span>
                <span class="text-danger">Disponible</span>
            </h5>
            <small class="fst-italic">Le sang de groupe O+ est le plus courant et peut être donné pour sauver des vies.</small>
        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/A+.png" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Don de sang A+</span>
                <span class="text-danger">Disponible</span>
            </h5>
            <small class="fst-italic">Le groupe sanguin A+ est très recherché pour les transfusions de patients.</small>
        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/B+.png" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Don de sang B+</span>
                <span class="text-danger">Disponible</span>
            </h5>
            <small class="fst-italic">Le groupe B+ est essentiel pour maintenir un stock de sang suffisant dans les hôpitaux.</small>
        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/AB+.png" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Don de sang AB+</span>
                <span class="text-danger">Disponible</span>
            </h5>
            <small class="fst-italic">Le groupe AB+ est le plus rare, mais les dons sont vitaux pour certaines opérations.</small>
        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/O-.jpeg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Don de sang O-</span>
                <span class="text-danger">Urgent</span>
            </h5>
            <small class="fst-italic">Le groupe O- est compatible avec tous les autres groupes et est crucial pour les situations d'urgence.</small>
        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container py-5">
    <h2 class="text-center mb-4">Formulaire d'Inscription pour le Don de Sang</h2>

    <form action="insertion_sql.php" method="POST">

        <!-- Sélection du rôle -->
        <div class="form-group mb-4">
            <label for="role">Choisissez votre rôle :</label>
            <select class="form-control" id="role" name="role" onchange="showFields()">
                <option value="">Sélectionner un rôle</option>
                <option value="donor">Donneur de Sang</option>
                <option value="need_blood">Personne Besoin de Sang</option>
                <option value="hospital">Hôpital</option>
            </select>
        </div>

        <!-- Formulaire pour un Hôpital -->
        <div id="hospitalFields" style="display:none;">
            <h5 class="text-danger">Informations sur l'Hôpital</h5>
            <div class="form-group mb-3">
                <label for="hospitalName">Nom de l'Hôpital :</label>
                <input type="text" class="form-control" id="hospitalName" name="hospitalName" required>
            </div>
            <div class="form-group mb-3">
                <label for="hospitalCode">Code de l'Hôpital :</label>
                <input type="text" class="form-control" id="hospitalCode" name="hospitalCode" required>
            </div>
            <div class="form-group mb-3">
                <label for="hospitalAddress">Adresse de l'Hôpital :</label>
                <input type="text" class="form-control" id="hospitalAddress" name="hospitalAddress" required>
            </div>
        </div>

        <!-- Formulaire pour une Personne Besoin de Sang -->
        <div id="needBloodFields" style="display:none;">
            <h5 class="text-danger">Informations Personnelles</h5>
            <div class="form-group mb-3">
                <label for="patientName">Nom Complet :</label>
                <input type="text" class="form-control" id="patientName" name="patientName" required>
            </div>
            <div class="form-group mb-3">
                <label for="bloodType">Type de Sang :</label>
                <select class="form-control" id="bloodType" name="bloodType" required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="patientPhone">Numéro de Téléphone :</label>
                <input type="tel" class="form-control" id="patientPhone" name="patientPhone" required>
            </div>
        </div>

        <!-- Formulaire pour un Donneur de Sang -->
        <div id="donorFields" style="display:none;">
            <h5 class="text-danger">Informations Donneur de Sang</h5>
            <div class="form-group mb-3">
                <label for="donorName">Nom Complet :</label>
                <input type="text" class="form-control" id="donorName" name="donorName" required>
            </div>
            <div class="form-group mb-3">
                <label for="donorPhone">Numéro de Téléphone :</label>
                <input type="tel" class="form-control" id="donorPhone" name="donorPhone" required>
            </div>
            <div class="form-group mb-3">
                <label for="donorBloodType">Type de Sang :</label>
                <select class="form-control" id="donorBloodType" name="donorBloodType" required>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="donorCity">Ville :</label>
                <input type="text" class="form-control" id="donorCity" name="donorCity" required>
            </div>
        </div>

        <!-- Bouton d'inscription -->
        <div class="form-group mt-4">
            <button type="submit" class="btn btn-danger w-100 py-3">Inscrivez-vous maintenant</button>
        </div>
    </form>
</div>


       
        <!-- Reservation Start -->



        <div class="container-xxl pt-5 pb-3">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Nos Donneurs et Responsables</h5>
            <h1 class="mb-5">Les Héros de Notre Cause</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-1.jpg" alt="Donneur 1">
                    </div>
                    <h5 class="mb-0">Mouha</h5>
                    <small>Donneur de Sang</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-2.jpg" alt="Donneur 2">
                    </div>
                    <h5 class="mb-0">Gorge</h5>
                    <small>Donneur de Sang</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-3.jpg" alt="Responsable 1">
                    </div>
                    <h5 class="mb-0">Asim</h5>
                    <small>Responsable de la Collecte</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item text-center rounded overflow-hidden">
                    <div class="rounded-circle overflow-hidden m-4">
                        <img class="img-fluid" src="img/team-4.jpg" alt="Responsable 2">
                    </div>
                    <h5 class="mb-0">Khalid</h5>
                    <small>Responsable de la Coordination</small>
                    <div class="d-flex justify-content-center mt-3">
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-danger mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Team End -->

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
        <h5 class="section-title ff-secondary text-center text-info fw-normal">Témoignages</h5>
        <h1 class="mb-5">Ce que nos donateurs et bénéficiaires disent !</h1>
        </div>
        <?php
        // Connexion à la base de données
        $conn = new mysqli("localhost", "root", "", "booking_tables");
        if ($conn->connect_error) {
            die("Connexion échouée: " . $conn->connect_error);
        }

        // Requête SQL pour obtenir les 6 derniers commentaires
        $sql = "SELECT DISTINCT name, message, photo FROM contact ORDER BY id DESC LIMIT 6";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
        ?>
            <div class="owl-carousel testimonial-carousel">
                <?php
                // Afficher les témoignages
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="inc.jpeg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <p><?php echo $row["message"]; ?></p>
                                <div class="d-flex align-items-center">
                                    <div class="ps-3">
                                        <h5 class="mb-1"><?php echo $row["name"]; ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } else {
            echo "<p>Aucun contact trouvé.</p>";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
    </div>
</div>

        <!-- Testimonial End -->
        
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-info fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Reservation</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-info fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>oumaima@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-info fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="section-title ff-secondary text-start text-info fw-normal mb-4">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-info w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-info py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom text-info" href="#">Your Site Name</a>, All Right Reserved. 
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="" class="text-info">Home</a>
                        <a href="" class="text-info">Cookies</a>
                        <a href="" class="text-info">Help</a>
                        <a href="" class="text-info">FQAs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>