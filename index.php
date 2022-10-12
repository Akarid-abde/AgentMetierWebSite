<?php
    //get data from form  
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    

    <title>MON ECO BRICO</title>

</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- BOTTOM NAV -->
    <nav style="background-color:#F25244;height:82px;" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <div href="index.php" style="margin-right: 0px;">
            <video width="130px" style="position: sticky;" autoplay loop muted>
                <source src="img/LogoV.mp4" type="video/mp4">
            </video>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Principe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Commentaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#timeline">Stratégie</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-family: 'Mansalva', cursive;font-weight: lighter;line-height: 1.7;" class="nav-link" id="FontBlog" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider" id="home">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase"> Nous fournissons des travailleurs de qualités </h6>
                        <h1 class="display-3 my-4">Agence de bricolage<br />Obtenez votre devis de bricolage gratuitement.</h1>
                        <a  href="#portfolio" class="btn btn-outline-light ms-3">Nous Service</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">                        
                        <h1 class="display-3 my-4">La première agence de bricolage au Maroc</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h1 class="display-3 my-4">Trouvez le prestataire idéal pour tous <br />les services du quotidien</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="text-center mt-4">
            <video width="100%"  autoplay loop muted>
                <source src="img/vediobanner.mp4" type="video/mp4">
            </video>
    </div>


    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Notre Principe</h1>
                        <p class="mx-auto">
                        Le savoir-faire et l’expérience que nous mettons à votre service dans les bricolages  répondront à tous vos besoins, même les plus spécifiques.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img  src="img/icon/confiance (2).png" alt="">
                        <h1><span class="blue">1</span></h1>
                        <h5>Confiance</h5>
                        <p>
                        Nous sommes actifs depuis de nombreuses années. Nous avons réussi à établir une relation de confiance et de proximité avec tous nos clients.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon/satisfaction.png" alt="">
                        <h1><span class="blue">2</span></h1>
                        <h5>Satisfaction</h5>
                        <p>
                        Notre ambition, votre satisfaction! Nous mettons du "cœur à l’ouvrage”, c’est ce qui nous caractérise le mieux.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon/qualitee.png" alt="">
                        <h1><span class="blue">3</span></h1>
                        <h5>Qualité</h5>
                        <p>
                        Nous sélectionnons avec minutieusement nos partenaires pour vous fournir un service irréprochable.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon/competence.png" alt="">
                        <h1><span class="blue">4</span></h1>
                        <h5>Compétence</h5>
                        <p>
                        Nous sommes rigoureux! Cette rigueur est le reflet de notre savoir-faire, de nos valeurs, de notre professionnalisme.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon/dynamisme.png" alt="">
                        <h1><span class="blue">5</span></h1>
                        <h5>Dynamisme</h5>
                        <p>
                        Nos devis sont établis sous 48 heures (ou moins). Tout est mis en œuvre pour répondre au plus vite à vos sollicitations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img src="img/icon/ecoute.png" alt="">
                        <h1><span class="blue">6</span></h1>
                        <h5>Ecoute</h5>
                        <p>
                        Parce que nous savons écouter, nous savons prendre le temps de comprendre votre besoin, et de vous proposer la meilleure solution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- MILESTONE -->
    <section id="milestone">
    <div class="container">
        <div class="d-flex justify-content-center flex-row mb-3">
            <h1 class="p-2">Besoin d’une agence de bricolage</h1>
            <div class="p-2"><div class="word"></div></div>
        </div>
    </section>
    

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">

                        <h1>Service</h1>
                        <p class="mx-auto">Chez Mon Eco Brico nous prenons soin d’utiliser du matériel de grande qualité et de travailler avec des marques professionnelles haut de gamme
                            afin de garantir des réalisations impeccables
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <?php include('get_metier.php') ?>
            <?php while($row=$featured_metier->fetch_assoc()){ ?>  
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <a href="<?php echo "service.php?metiers_id=".$row['metiers_id']; ?>"><img style="" src="img/<?php echo $row['metiers_image']; ?>"  alt=""></a>
                            <div class="social-icons">
                                <a href="<?php echo "service.php?metiers_id=".$row['metiers_id']; ?>" class="">Demander</a>
                            </div>
                            <a href="<?php echo "service.php?metiers_id=".$row['metiers_id']; ?>"></a><div class="overlay"></div>
                        </div>
                        <div id="btn2" ><?php echo $row['metiers_name']; ?></div>
                    </div>
                </div>
            <?php } ?> 
            
            </div>
            
        </div>
    </section>


    <section class="bg-light" id="reviews">
        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/team_1.jpg" alt="">
                    <h5>ZAKARIA ALAOUI</h5>
                    <small>RABAT</small>
                </div>
                <h3>
                    « A la recherche d’une nouvelle agence des professions au maroc, j’ai connu Mon Eco Brico un peu par hasard. Et le hasard fait très bien les choses ! Une agence dynamique, à l’écoute des problématiques et de très bons conseils».
                </h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>

            <div class="review">
                <div class="person">
                    <img src="img/team_2.jpg" alt="">
                    <h5>JOHN TIAGO</h5>
                    <small>TANGER</small>
                </div>
                <h3>« Toujours à l’écoute de notre besoin, l’agence de bricolage Mon Eco Brico est très réactive dans la prise en charge et les propositions de solutions ».</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>

            <div class="review">
                <div class="person">
                    <img src="img/team_3.jpg" alt="">
                    <h5>TAWFIQ ALAMI</h5>
                    <small>MEKNES</small>
                </div>
                <h3>« L'agence de communication Mon Eco Brico a su être à l’écoute de notre projet, et s’investir avec force de propositions. Très réactif, répondu à nos besoins, en nous apportant son côté créatif. Il nous a accompagné dans la construction de notre image, avec un grand professionnalisme. »</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>

            <div class="review">
                <div class="person">
                    <img src="img/team_4.jpg" alt="">
                    <h5>أحمد الشمهري</h5>
                    <small>TETOUAN</small>
                </div>
                <h3>بصراحة أول مرة نتعامل مع هاد الشركة كاين الإتقان والمعقول لي كنت كانقلب عليهم ولقيتهم عندكم ومزال إن« شاء الله التعامل غايكون معاكم، تبارك الله عليكم«</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>

            <div class="review">
                <div class="person">
                    <img src="img/team_5.jpg" alt="">
                    <h5>ANIA LOURA</h5>
                    <small>MADRID</small>
                </div>
                <h3>« Notre cabinet est très satisfait par la prestation de l'agence mon eco brico. Leurs conseils avisés, leur disponibilité et surtout leur créativité nous ont été très précieux».</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>

        </div>
    </section>

    <section id="milestone2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Stratégie de travail </h1>
                        <p id="text" class="mx-auto">Chez Mon Eco Brico nous prenons soin d’utiliser du matériel de grande qualité et de travailler avec des marques professionnelles haut de gamme
                            afin de garantir des réalisations impeccables</p>
                    </div>
                </div>
            </div>
            <?php include 'timeline.php';?>
        </div> 
    </section>
    
    <section id="blog">
        <div class="container">
            <?php include 'Blogs.php';?>
        </div> 
    </section>


    <?php include 'footer.php';?>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3" method="post" action="contact.php">
                                    <div>
                                        <div>
                                        <?php
                                        if(isset($_SESSION['status'])){
                                            $se = $_SESSION['status'];
                                            echo "<script>alert('$se')</script>";
                                            unset($_SESSION['status']);
                                        }
                                        ?>
                                        </div>
                                        <h1>Rester En Contact</h1>
                                    <p>N'hésitez pas à nous contacter et nous vous répondrons dans les plus brefs délais</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Nom</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Abde" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Prénom</label>
                                        <input type="text" name="prenom" class="form-control" placeholder="Abde" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Abde@example.com" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Message</label>
                                        <textarea name="message" placeholder="This is looking great and nice." class="form-control" id=""  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Envoyer le message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
    <!-- Footer -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/animation.js"></script>
    
    
</body>

</html>