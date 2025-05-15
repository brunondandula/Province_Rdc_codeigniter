<!DOCTYPE html>
<html lang="en">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
    
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0" style="width: 100%; height: 55px;">
            <a href="/" class="navbar-brand p-0">
                <img src="img/Trivago-Logo.png" alt="Mon Logo" style="width: 120px; height: 62px; margin-left: 100px; margin-top: 1px;font-size: 1px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="margin-right: 105px;">
                <div class="navbar-nav ms-auto py-0">
                    <a href="favorites.html" class="nav-item nav-link" style="color: #000;font-size:13px">
                        <i class="bi bi-heart" style="font-size: 1.2rem;padding:12px"></i> Favoris
                    </a>
                    <a href="#" class="nav-item nav-link language-link" style="color: #000;font-size:13px">
                        <i class="bi bi-globe" style="font-size: 1.2rem;padding:12px"></i> FR $
                    </a>
                    <a href="#" class="nav-item nav-link" style="font-size:13px" id="loginLink" >
                         <i class="bi bi-person-circle" style="font-size: 1.2rem; padding:12px" ></i> Se Connecter
                    </a>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style=" font-size: 13px; margin-top:8px;">
                        <span class="bi bi-list" style="font-size: 22px; margin-right: 5px;"></span> Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Activité récente</a></li>
                        <li><a class="dropdown-item" href="#">Aide et assistance</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </nav>

    <!-- Navbar & Hero End -->

    <div class="container-fluid service py-5" style="background: linear-gradient(to top left, rgb(243, 243, 234),rgb(255, 255, 255));; height: 380px; margin-top: -29px;width: 100%; ">
        <div class="container " style="width: 100%;margin-top: 78px;">
                <div class="provinces-title mb-5" style="font-family: 'Arial', sans-serif; font-size: 100px; color: #000; margin-left:79px">
                <h5 style="font-weight: bold; font-family: 'Arial', sans-serif;margin-left:-30px; font-size:25px">Les provinces de la république démocratique du congo</h5>
                 <h6 style="color: #000; font-family: 'Arial', sans-serif; font-size:15px; margin-left:-30px">Nous vous aidons à obtenir la liste des villes d'une province.</h6>
        </div>
          
            <div class="row mb-4 justify-content-center" style="position: relative; width: 90%; margin-left:50px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);">
        <div class="col-md-9 text-center" style="width: 100%;">
     <div class="d-flex" style="border-radius: 15px; overflow: hidden; align-items: center; width: 100%; height: 57px;">
        <div class="input-group flex-grow-1" style="width:0% height:50%; ">
            <span class="input-group-text" id="search-icon" style="border: none; background: transparent;">
                <i class="bi bi-search" style="color: #000;font-size: 1.2rem;"></i>
            </span>
            <input type="text" id="search-input" class="form-control" placeholder="Rechercher une province..." oninput="toggleClearButton()">
            <button id="clear-button" class="btn btn-outline-secondary" style=" height: auto; display: none; width:5%;border:none; margin-top:-6px; margin-left:-5px; background: transparent;" onclick="clearInput()">
                <i class="fas fa-times" style="color: #000;"></i>
            </button>
        </div>
        <div  class="barre" ></div>
        <input type="text" id="city-input" class="form-control" placeholder="Ville" style=" height: 50px;border:none; background-color:transparent; "  readonly>
        <button id="search-button" class="search-button">
            <strong >Rechercher</strong>
        </button>
    </div>
</div>
        <div id="custom-popup" class="custom-popup">
            <div class="popup-title"></div>
        </div>
    </div>
</div>

           
            <div class="container-fluid mt-30" >
                <div class="row mb-4 justify-content-center" style="width: 83%;  height: 100px; margin-left: 72px; margin-top: 0px;">
                    <div class="col-md-4 text-center" style="width: 100%; height: 100px; margin-top: 38px; margin-left: 52px;">
                        <div class="d-flex justify-content-around flex-wrap align-items-center">
                            <img src="img/partner-logo1.png" alt="Partenaire 1" style="max-height: 40px;   max-width: 9%; ">
                            <img src="img/partner-logo2.avif" alt="Partenaire 2" style="max-height: 40px;  max-width: 9%;">
                            <img src="img/partner-logo3.avif" alt="Partenaire 3" style="max-height: 40px;  max-width: 9%;">
                            <img src="img/partner-logo4.png" alt="Partenaire 4" style="max-height: 40px;  max-width: 9%;">
                            <img src="img/partner-logo5.avif" alt="Partenaire 5" style="max-height: 40px;  max-width: 9%;">
                            <img src="img/partner-logo6.avif" alt="Partenaire 6" style="max-height: 40px;  max-width: 9%;">
                            <img src="img/partner-logo7.avif" alt="Partenaire 7" style="max-height: 40px;  max-width: 9%;">
                            <span style="font-size: 12px; margin: 10px; color:rgb(162, 166, 148);">et des centaines <br> d’autres partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="results" class="mt-4" style="width:90%"></div>
<div id="city-details" class="mt-4" style="display: none;">
    <h2>Détails de la Ville</h2>
    <div id="city-detail-content"></div>
</div>
    <div class="container mt-15" style="width: 81%; margin-top: 0px; ">
        <h5 style="margin-left:15px;font-weight: bold; font-family: 'Arial', sans-serif;font-size:25px;margin-left:15px">Quelques villes de la république  </h5>
        <div class="hotel-carousel">
            <div class="carousel-container" id="city-carousel">
                <div class="carousel-slide active">
                    <div class="row justify-content-center">
                        <?php foreach ($villesLimit as $ville): ?>
                            <div class="col-md-3">
                                <div class="hotel-card" >
                                    
                                    <a href="/city/<?= $ville['id'] ?>"><img src="<?= $ville['image'] ?>" alt="<?= $ville['nom_ville'] ?>" class="hotel-image"></a>
                                    <h5><?= $ville['nom_ville'] ?></h5>
                                    <p class="rating"> <?= $ville['population'] ?>
                                        <span class="location">
                                            <i class="fas fa-map-marker-alt"></i> <?= $ville['nom_province'] ?>
                                        </span>
                                    </p>
                                    <div class="grand">
                                        <div class="legend">
                                            <span class="discount-badge">Detail</span> La taille de la ville
                                        </div>
                                        <div class="petit">
                                            <div class="petit1">
                                                <div class="row">
                                                    <div class="gauche" style="color:red">Superficie:</div>
                                                    <div class="droite" > <?= $ville['superficie'] ?></div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 <div class="container-final" >
    <div class="container"  >
        <div class="row" >
            <div class="col-md-12 text-center" id="photoecrit">
                <h2 style="font-family: inherit; font-size: 25px; color: #fff; margin-top: -10px;font-weight: bold;">Explorez les merveilles de la République Démocratique du Congo</h2>
                <p style="font-family: inherit; font-size: 16px; color: #fff;font-weight: bold;">Découvrez la beauté et la diversité de notre pays à travers ses provinces et ses villes.</p>
            </div>
        </div>
        
        <div class="destination-list">
    <div class="destination-container">
        <div class="destination-item active"> <p class="para" style="margin-top:-5px; font-weight: bold;">kwilu</p></div>
        <div class="destination-item"><p class="para" style="margin-top:-5px">Kinshasa</p></div>
        <div class="destination-item"><p class="para"   style="margin-top:-5px">Ituri</p></div>
        <div class="destination-item"><p class="para"   style="margin-top:-5px">Kasai</p></div>
        <div class="destination-item"><p class="para"   style="margin-top:-5px">kwango</p></div>
        <div class="destination-item"><p class="para"   style="margin-top:-5px">maniema</p></div>
        <div class="destination-item"><p class="para"   style="margin-top:-5px">tanganika</p></div>
      
    </div>
    <p style=" font-size:11px;margin-left:20px;margin-top:10px">Quelques villes de la république democratique du congo et leurs provinces</p>
    <div class="destination-details">
        <div class="destination-item">
            <span style="font-size:13px;">Bandundu ville</span>
            <span style="margin-left:175px;font-size:13px">Kwilu</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Bunia</span>
            <span style="margin-left:235px;font-size:13px">Ituri</span>
        </div>
        <div class="destination-item " >
            <span style="font-size:13px">Kinshasa</span>
            <span style="margin-left:190px;font-size:13px">Kinshasa</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Lubumbashi</span>
            <span style="margin-left:134px;font-size:13px">Haut-katanga</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kindu</span>
            <span style="margin-left:210px;font-size:13px">Maniema</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kabinda</span>
            <span style="margin-left:200px;font-size:13px">Lomami</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kikwit</span>
            <span style="margin-left:229px;font-size:13px">Kwilu</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Matadi</span>
            <span style="margin-left:169px;font-size:13px">Kongo-central</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kabinda</span>
            <span style="margin-left:200px;font-size:13px">Lomami</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kikwit</span>
            <span style="margin-left:232px;font-size:13px">Kwilu</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Matadi</span>
            <span style="margin-left:173px;font-size:13px">Kongo-central</span>
        </div>
        <div class="destination-item">
            <span style="font-size:13px">Kabinda</span>
            <span style="margin-left:200px;font-size:13px">Lomami</span>
        </div>
       
        
    </div>
</div>
    </div>
    
</div>
    
<div class="popular-searches">
    <h1>Recherches populaires</h1>
    <div class="card-container">
        <?php foreach ($villes4 as $ville): ?>
            <div class="card">
                <div class="imageFin">
                    <img src="<?= $ville['image'] ?>" alt="<?= $ville['nom_ville'] ?>" class="card-image">
                </div>
                <div class="ecrit">
                    <h2><?= $ville['nom_ville'] ?></h2>
                    <p><?= $ville['nom_province'] ?></p>
                    <p><?= $ville['population'] ?> <span>habitants</span></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    <div class="modal fade" id="cityDetailModal" tabindex="-1" aria-labelledby="cityDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cityDetailModalLabel">Détails de la Ville</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="cityDetailContent">
                 
                </div>
            </div>
        </div>
    </div>

   
    <div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width:85%;height:30%;">
                <div class="modal-header" >
                    <h5 class="modal-title" id="languageModalLabel" style="font-family:inherit;font-size:15px;font-weight:bold;">Sélectionnez la langue et le devise</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="languageSelect" class="form-label" style="font-size:11px;font-family:inherit;color:black">Langue</label>
                        <select class="form-select" id="languageSelect">
                            <option selected>Français</option>
                            <option>Anglais</option>
                            <option>Espagnol</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="currencySelect" class="form-label" style="font-size:11px;font-family:inherit;color:black">Devise</label>
                        <select class="form-select" id="currencySelect">
                            <option selected>EUR - Euro</option>
                            <option>USD - Dollar</option>
                            <option>GBP - Livre</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer" style="margin-top:-12px">
                    <button type="button" class="modalBoutonAppli">Appliquer</button>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="cityDetailModal" tabindex="-1" aria-labelledby="cityDetailModalLabel" aria-hidden="true" style="background-color:red">
        <div class="modal-dialog" style="width: 90%; background-color:rgb(67, 68, 69); height: auto;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cityDetailModalLabel">Détails de la Ville</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="cityDetailContent">
                    
                </div>
            </div>
        </div>
    </div>
 
    <div class="modal fade" id="loginModal" style="width: 100%;" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
            <div class="modal-content" style=" background-color:rgb(252, 252, 252); height: auto;">
                <div class="modal1">
                    <img src="img/Trivago-Logo.png" alt="" style="width: 120px; height: 69px; margin-right: 310px; margin-left:15px"> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color:red;"></button>
                </div>
                <div class="modal-body" >
                    <h5 class="modal-title" id="loginModalLabel" style="margin-top: -22px; font-family: Arial, sans-serif;font-weight: bold;">Économisez plus grâce à votre statut de membre</h5>
                    <div class="d-flex justify-content-around mb-3" style="margin-top: 25px; margin-left: -5px;">
                        <button class="btn btn-outline-primary btn-social">
                            <i class="fab fa-google"></i> Google
                        </button>
                        <button class="btn btn-outline-secondary btn-social">
                            <i class="fab fa-apple"></i> Apple
                        </button>
                        <button class="btn btn-outline-info btn-social">
                            <i class="fab fa-facebook-f"></i> Facebook
                        </button>
                    </div>
                            <div style="text-align: center; margin: 0px;">
                            <hr style="border: 1px solid #ccc; width: 40%; display: inline-block;">
                            <span style="margin: 0 10px; font-weight: bold;">ou</span>
                            <hr style="border: 1px solid #ccc; width: 40%; display: inline-block;">
                            </div>
                    <button class="btn btn-primary w-100 h-100" style="margin-top:-10px;font-family: Arial, sans-serif;font-weight: bold;">Se connecter ou créer un compte</button>
                    <p style="font-size:11px; margin-top:12px;"> En créant un compte, vous acceptez notre <a href="#">Charte de confidentialité</a> et nos <a href="#">Conditions générales d’utilisation.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid footer py-5 wow fadeIn">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>Terapia</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolorem impedit eos autem dolores laudantium quia, qui similique.</p>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share fa-2x text-white me-2"></i>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Our Team</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Provinces</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Liste des provinces</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                        <a href="#"><i class="fas fa-envelope me-2"></i> info@example.com</a>
                        <a href="#"><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="#" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
   
    <script src=" js/main.js"></script>
<script>
            $(document).ready(function() {
                $('.language-link').on('click', function(event) {
                    event.preventDefault(); 
                    $('#languageModal').modal('show'); 
                });

                $('#loginLink').on('click', function(event) {
                    event.preventDefault(); 
                    $('#loginModal').modal('show'); 
                });

                let timeout; // Variable pour le délai

                $('#search-input').on('input', function() {
                    const searchTerm = $(this).val().trim();

                    clearTimeout(timeout);

                    if (searchTerm) {
                        timeout = setTimeout(function() {
                            $.ajax({
                                url: '/city/get_info',
                                type: 'GET',
                                data: { name: searchTerm },
                                dataType: 'json',
                                success: function(response) {
                                    let suggestions = '';
                                    if (Array.isArray(response) && response.length) {
                                        $('#province-name').text(searchTerm);

                                        response.forEach(city => {
                                            suggestions += `<a href="#" onclick="selectCity('${city.nom_ville}', ${city.id})" class="suggestion-item"><i class="fas fa-map-marker-alt"></i> La ville de <span class="span">${city.nom_ville}</span></a>`;
                                        });
                                    } else {
                                        suggestions = '<div class="suggestion-item">Aucun résultat trouvé</div>';
                                    }

                                    $('#custom-popup').html(`<div class="popup-title">Les villes de la province de <span id="province-name">${searchTerm}</span></div>${suggestions}`).show();
                                },
                                error: function() {
                                    Swal.fire('Erreur', 'Erreur lors de la recherche.', 'error');
                                }
                            });
                        }, 500); // Délai de 500 ms
                    } else {
                        $('#custom-popup').hide(); // Masquer le popup si aucun texte
                    }
                });

                const villes = <?= json_encode($villes); ?>; // Transmet toutes les villes au JavaScript
                let index = 0;

                function updateVilles() {
                    const carouselContainer = document.getElementById('city-carousel');
                    carouselContainer.innerHTML = ''; // Efface le contenu précédent

                    // Crée une nouvelle slide
                    const newSlide = document.createElement('div');
                    newSlide.className = 'carousel-slide active';
                    const row = document.createElement('div');
                    row.className = 'row justify-content-center';

                    // Ajoute les 3 prochaines villes
                    for (let i = 0; i < 3; i++) {
                        if (index >= villes.length) {
                            index = 0; // Réinitialise l'index
                        }
                        const ville = villes[index++];
                        const col = document.createElement('div');
                        col.className = 'col-md-4';
                        col.innerHTML = `
                            <div class="hotel-card">
                                <div class="image-container">  <!-- Nouveau conteneur pour l'image -->
                                    <a href="#" onclick="showCityDetails(${ville.id})">
                                        <img src="${ville.image}" alt="${ville.nom_ville}" class="hotel-image">
                                    </a>
                                                </div>  
                                <h5>${ville.nom_ville}</h5>
                                <p class="rating" style="margin-left:15px;font-family: 'Arial', sans-serif;">
                                    <span class="habitants">habitants</span> (${ville.population})
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt"></i> ${ville.nom_province}
                                    </span>
                                </p>
                                <div class="grand">
                                    <div class="legend">
                                        <div class="discount-badge">
                                            <p>Détail</p>
                                        </div>
                                        <p style="color:rgb(190, 56, 56); margin-top:-17px">A propos de la ville</p>
                                    </div>
                                    <div class="petit">
                                        <div class="petit1">
                                            <div class="row">
                                                <div class="gauche">Superficie:</div>
                                                <div class="droite">${ville.superficie}</div>
                                            </div>
                                            <button class="btnConsulter" onclick="showCityDetails(${ville.id})">Consulter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        row.appendChild(col);
                    }
                    newSlide.appendChild(row);
                    carouselContainer.appendChild(newSlide);
                }

                setInterval(updateVilles, 7000); // Changez les villes toutes les 7 secondes
                updateVilles();

                // Événement de clic pour le bouton de recherche
                $('#search-button').on('click', function() {
                    const cityName = $('#city-input').val().trim();
                    const city = villes.find(v => v.nom_ville === cityName); // Cherche la ville par son nom

                    if (city) {
                        showCityDetails(city.id); // Afficher les détails de la ville
                    } else {
                        Swal.fire('Oups', 'Aucune ville n\'a été sélectionnér', 'info');
                    }
                });
            });

            // Fonction pour sélectionner une ville
            function selectCity(cityName, cityId) {
                $('#city-input').val(cityName); // je rempli le champ de la ville
                $('#custom-popup').hide(); // Masquer le popup
            }

            // Fonction pour afficher les détails de la ville
            function showCityDetails(cityId) {
                $.ajax({
                    url: '/city/get_details/' + cityId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data) {
                            let detailSection = `
                                <h4>${data.nom_ville}</h4>
                                <img src="${data.image}" alt="${data.nom_ville}" style="width: 80%; height: 200px; border-radius:5px;" />
                                <p><strong>Population:</strong> ${data.population}</p>
                                <p><strong>Superficie:</strong> ${data.superficie} km²</p>
                                <p><strong>Province:</strong> ${data.nom_province}</p>
                                <p><strong>Langue:</strong> ${data.langue}</p>
                            `;
                            $('#cityDetailContent').html(detailSection);
                            $('#cityDetailModal').modal('show'); 
                        } else {
                            Swal.fire('Erreur', 'Détails de la ville non trouvés.', 'error');
                        }
                    },
                    error: function(jqXHR, textStatus) {
                        console.error("Erreur AJAX : ", textStatus);
                        Swal.fire('Erreur', 'Erreur lors de la récupération des détails : ' + textStatus, 'error');
                    }
                });
            }


            function toggleClearButton() {
                    const input = document.getElementById('search-input');
                    const clearButton = document.getElementById('clear-button');
                    clearButton.style.display = input.value ? 'block' : 'none';
                }

                function clearInput() {
                    const input = document.getElementById('search-input');
                    input.value = '';
                    toggleClearButton();
                    input.focus();
    }
</script>
</body>
</html>