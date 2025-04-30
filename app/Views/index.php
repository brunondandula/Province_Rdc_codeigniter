<!DOCTYPE html>
<html lang="en">
<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <img src="img/Trivago-Logo.png" alt="Mon Logo" style="width: 120px; height: 69px; margin-left: 110px; margin-top: -24px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="favorites.html" class="nav-item nav-link">
                        <i class="bi bi-heart"></i> Favoris
                    </a>
                    <a href="#" class="nav-item nav-link language-link" style="color: #000;">
                        <i class="fa fa-globe"></i> Language
                    </a>
                    <a href="#" class="nav-item nav-link" style="color: #000;" id="loginLink">
                         <i class="fa fa-user-circle"></i> Se Connecter
                    </a>
                </div>
                <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fa fa-bars"></span> Menu
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="recent-activities.html">Activité récente</a></li>
                            <li><a class="dropdown-item" href="contact-support.html">Aide et assistance</a></li>
                        </ul>
                </div>
            </div>
        </nav>
    </div>
    <hr>
    <!-- Navbar & Hero End -->

    <div class="container-fluid service py-5" style="background-color:rgb(249, 249, 243); height: 310px; margin-top: -20px;">
        <div class="container py-5">
            <div class="provinces-title mb-5">
                <h5>Les provinces de la rd congo</h5>
                <h6>Nous vous aidons à obtenir la liste des villes d'une province.</h6>
            </div>
          
            <div class="row mb-4 justify-content-center" style="position: relative;">
                <div class="col-md-9">
                    <div class="d-flex" style="border: 5px solid orange; border-radius: 15px; overflow: hidden; align-items: center; width: 120%; height: 70px; margin-left: -65px;">
                        <div class="input-group">
                             <span class="input-group-text" id="search-icon" style="border: none; background: transparent;">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" id="search-input" class="form-control" placeholder="Rechercher une province...">
                        </div>
                        <button id="search-button" class="btn" style="border-radius:10px; margin:5px;width:20%;height:50px;">
                            <strong>Rechercher</strong>
                        </button>
                    </div>
                    <div id="custom-popup" class="custom-popup">
                        <div class="popup-title">Les villes de la province de <span id="province-name"></span></div>
                    </div>
                </div>
            </div>

           
            <div class="container-fluid mt-100">
                <div class="row mb-4 justify-content-center">
                    <div class="col-md-9 text-center">
                        <div class="d-flex justify-content-around flex-wrap align-items-center">
                            <img src="img/partner-logo1.png" alt="Partenaire 1" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo2.avif" alt="Partenaire 2" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo3.avif" alt="Partenaire 3" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo4.png" alt="Partenaire 4" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo5.avif" alt="Partenaire 5" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo6.avif" alt="Partenaire 6" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <img src="img/partner-logo7.avif" alt="Partenaire 7" style="max-height: 40px; margin: 10px; max-width: 10%;">
                            <span style="font-size: 7px; margin: 10px; color:rgb(162, 166, 148);">et des centaines <br> d’autres partenaires</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="results" class="mt-4"></div>
<div id="city-details" class="mt-4" style="display: none;">
    <h2>Détails de la Ville</h2>
    <div id="city-detail-content"></div>
</div>
    <div class="container mt-15">
        <h2 style="margin-left:15px">Quelques villes de la RDC</h2>
        <div class="hotel-carousel">
            <div class="carousel-container" id="city-carousel">
                <div class="carousel-slide active">
                    <div class="row justify-content-center">
                        <?php foreach ($villesLimit as $ville): ?>
                            <div class="col-md-4">
                                <div class="hotel-card">
                                    <a href="/city/<?= $ville['id'] ?>"><img src="<?= $ville['image'] ?>" alt="<?= $ville['nom_ville'] ?>" class="hotel-image"></a>
                                    <h5><?= strtoupper($ville['nom_ville']) ?></h5>
                                    <p class="rating"><?= $ville['population'] ?> habitants
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
                                                    <div class="gauche">Superficie:</div>
                                                    <div class="droite"> <?= $ville['superficie'] ?></div>
                                                </div>
                                                <button class="btn" onclick="showCityDetails(<?= $ville['id'] ?>)">Consulter</button>
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
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="languageModalLabel">Sélectionnez la langue et le devise</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="languageSelect" class="form-label">Langue</label>
                        <select class="form-select" id="languageSelect">
                            <option selected>Français</option>
                            <option>Anglais</option>
                            <option>Espagnol</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="currencySelect" class="form-label">Devise</label>
                        <select class="form-select" id="currencySelect">
                            <option selected>EUR - Euro</option>
                            <option>USD - Dollar</option>
                            <option>GBP - Livre</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="width:100px; margin-right:1px">Appliquer</button>
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
 
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <img src="img/Trivago-Logo.png" alt="" style="width: 120px; height: 69px; margin-right: auto;"> 
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="loginModalLabel">Économisez plus grâce à votre statut de membre</h5>
                    <div class="d-flex justify-content-around mb-3">
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
                    <p class="text-center">ou</p>
                    <button class="btn btn-primary w-100 h-100">Se connecter ou créer un compte</button>
                    <p style="font-size:13px; margin-top:12px;">En créant un compte, vous acceptez notre <a href="#">Charte de confidentialité</a> et nos <a href="#">Conditions générales d’utilisation.</a></p>
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
                                event.preventDefault(); // Prevent default link behavior
                                $('#languageModal').modal('show'); // Show the modal
                            });

                            $('#loginLink').on('click', function(event) {
                                event.preventDefault(); // Prevent default link behavior
                                $('#loginModal').modal('show'); // Show the login modal
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
                                            
                                                suggestions += `<a href="#" onclick="showCityDetails(${city.id})" class="suggestion-item"><i class="fas fa-map-marker-alt"></i> La ville de <span class="span">${city.nom_ville}</span></a>`;
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
                            const villes = <?= json_encode($villes); ?>; // je Transmet toutes les villes au JavaScript
                            let index = 0;

                    function updateCities() {
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
                                    <a href="#" onclick="showCityDetails(${ville.id})"><img src="${ville.image}" alt="${ville.nom_ville}" class="hotel-image"></a>
                                    <h5>${ville.nom_ville.toUpperCase()}</h5>
                                    <p class="rating">${ville.population} habitants
                                        <span class="location">
                                            <i class="fas fa-map-marker-alt"></i> ${ville.nom_province}
                                        </span>
                                    </p>
                                    <div class="grand">
                                        <div class="legend"><span class="discount-badge">Détail</span> Moins cher qu'à l'habitude</div>
                                        <div class="petit">
                                            <div class="petit1">
                                                <div class="row">
                                                    <div class="gauche">Superficie:</div>
                                                    <div class="droite">${ville.superficie}</div>
                                                </div>
                                                <button class="btn" onclick="showCityDetails(${ville.id})">Consulter</button>
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

                            setInterval(updateCities, 7000); // Changez les villes toutes les 7 secondes
                            updateCities();


                        });
                    function showCityDetails(cityId) {
                                event.preventDefault(); 
                                $.ajax({
                                    url: '/city/get_details/' + cityId,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(data) {
                                        if (data) {
                                            let detailSection = `
                                                <h4>${data.nom_ville}</h4>
                                                <img src="${data.image}" alt="${data.nom_ville}" style="width: 80%; height: auto; "; border-radius:4px; />
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
                                    error: function(jqXHR, textStatus, errorThrown) {
                                        console.error("Erreur AJAX : ", textStatus, errorThrown);
                                        Swal.fire('Erreur', 'Erreur lors de la récupération des détails : ' + textStatus, 'error');
                                    }
                                });
                            }
</script>
</body>
</html>