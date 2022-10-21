<?php
    //get data from form  
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    

    <title>MON ECO BRICO</title>

</head>
<body>



<!-- Social links -->
<aside class="_social-links">
	<ul class="_links-list">
		<li class="_social-link"><a href="https://www.facebook.com/monecobrico" target="_blank"><i class='bx bxl-facebook'></i></a></li>
		<li class="_social-link"><a href="https://instagram.com/decoration._.2022?igshid=YmMyMTA2M2Y=" target="_blank"><i class='bx bxl-instagram'></i></a></li>
	</ul>
</aside>


    <nav style="background-color:#F25244;height:82px;" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a href="index.php" style="margin-right: 0px;">
            <video  width="130px" style="position: sticky;" autoplay loop muted>
                <source src="img/LogoV.mp4" type="video/mp4">
            </video>
            </a>
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
                        <a class="nav-link" href="#milestone2">Stratégie</a>
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
    <div class="owl-carousel owl-theme hero-slider" id="home" >
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                    
                        <h6 class="text-white text-uppercase" > Nous fournissons des travailleurs de qualités </h6>
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

    <div id="particles-js"> </div>


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
                        <img class="vert-move" src="img/icon/confiance (2).png" alt="">
                        <h1><span class="blue">1</span></h1>
                        <h5>Confiance</h5>
                        <p>
                        Nous sommes actifs depuis de nombreuses années. Nous avons réussi à établir une relation de confiance et de proximité avec tous nos clients.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="vert-move" src="img/icon/satisfaction.png" alt="">
                        <h1><span class="blue">2</span></h1>
                        <h5>Satisfaction</h5>
                        <p>
                        Notre ambition, votre satisfaction! Nous mettons du "cœur à l’ouvrage”,<br>
                        c’est ce qui nous caractérise le mieux. <br>
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="vert-move" src="img/icon/qualitee.png" alt="">
                        <h1><span class="blue">3</span></h1>
                        <h5>Qualité</h5>
                        <p>
                        Nous sélectionnons avec minutieusement nos partenaires pour vous fournir un service irréprochable. <br>
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="vert-move" src="img/icon/competence.png" alt="">
                        <h1><span class="blue">4</span></h1>
                        <h5>Compétence</h5>
                        <p>
                        Nous sommes rigoureux! Cette rigueur est le reflet de notre savoir-faire, de nos valeurs, de notre professionnalisme. <br>
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="vert-move" src="img/icon/dynamisme.png" alt="">
                        <h1><span class="blue">5</span></h1>
                        <h5>Dynamisme</h5>
                        <p>
                        Nos devis sont établis sous 48 heures (ou moins). Tout est mis en œuvre pour répondre au plus vite à vos sollicitations. <br>
                        <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service">
                        <img class="vert-move" src="img/icon/ecoute.png" alt="">
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
            <?php while($row = $featured_metier->fetch_assoc()){ ?>  
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
                </div>
                <h3>
                    « A la recherche d’une nouvelle agence des professions au maroc, j’ai connu Mon Eco Brico un peu par hasard. Et le hasard fait très bien les choses ! Une agence dynamique, à l’écoute des problématiques et de très bons conseils ».
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
                </div>
                <h3>بصراحة أول مرة نتعامل مع هاد الشركة كاين الإتقان والمعقول لي كنت كانقلب عليهم ولقيتهم عندكم ومزال إنشاء الله التعامل غايكون معاكم، تبارك الله عليكم</h3>
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
                </div>
                <h3>« Notre cabinet est très satisfait par la prestation de l'agence mon eco brico. Leurs conseils avisés, leur disponibilité et surtout leur créativité nous ont été très précieux ».</h3>
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
    
    <div id="particles-js1"></div>

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
            
            <div class="section section-md py-5">
   
            <div class="container">
 
      <!-- Title  -->
      <div class="row">
         <div class="col-md-4 text-center mx-auto">

         </div>
      </div>

    <div class="row mt-4">
         <div class="timeline timeline-six px-3 px-sm-0">
            <div class="row no-gutters">
                <div class="col-sm"></div>
   
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col"> </div>
                     <div class="col"> </div>
                  </div>
                  <span class="m-3 avatar-separator">
                    <img class="img-fluid organic-radius border-tertiary" src="img/clickbard.jpg" alt="avatar"></span>
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
               </div>

               <!-- timeline profile card -->
               <div class="col-sm py-2">
                  <div class="profile-card">
                     <div class="card shadow border-light">
                        <div class="card-body">
                           <h5 class="card-title">Faites une demande</h5>
    
                           <p class="card-text my-2">Envoyez-nous votre demande via notre formulaire de service ou via formulaire de contact en ligne, c’est gratuit et sans engagement.</p>
            
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Timeline Item 2 -->
            <div class="row no-gutters">
               <!-- timeline profile card -->
               <div class="col-sm py-2">
                  <div class="profile-card">
                     <div class="card shadow border-light">
                        <div class="card-body">
                           <h5 class="card-title"> Vous recevez une offre </h5>
                           <!-- <h6 class="card-subtitle">Founder</h6> -->
                           <p class="card-text my-2">Vous recevrez sous 24 à 48 heures la meilleure offre pour répondre à votre demande.</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <!-- timeline item 2 center image & middle line -->
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
                  <span class="m-3 avatar-separator"><img class="img-fluid organic-radius border-secondary" src="img/wpforms.jpg" alt="avatar"></span>
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
               </div>
               <div class="col-sm">
                  <!--spacer-->
               </div>
            </div>


            <!-- Timeline Item 3 -->
            <div class="row no-gutters">
               <div class="col-sm">
                  <!--spacer-->
               </div>
               <!-- timeline item 3 center image & middle line -->
               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
                  <span class="m-3 avatar-separator"><img class="img-fluid organic-radius border-warning" src="img/calander.jpg" alt="avatar"></span>
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
               </div>
               <!-- timeline profile card -->
               <div class="col-sm py-2">
                  <div class="profile-card">
                     <div class="card shadow border-light">
                        <div class="card-body">
                           <h5 class="card-title">Prise de rendez-vous </h5>
                           
                           <p class="card-text my-2">En cas de réception de la demande, nous fixons ensemble une date pour votre service choisi.</p>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <!-- Timeline Item 4 -->
            <div class="row no-gutters">
               <!-- timeline profile card -->
               <div class="col-sm py-2">
                  <div class="profile-card">
                     <div class="card shadow border-light">
                        <div class="card-body">
                           <h5 class="card-title">Votre avis après service </h5>
                           <!-- <h6 class="card-subtitle">Sales</h6> -->
                           <p class="card-text my-2">Une fois le travail accompli, nous attendons avec impatience votre témoignage sur la satisfaction.</p>
                        
                        </div>
                     </div>
                  </div>
               </div>
              

               <div class="col-sm-1 text-center flex-column d-none d-sm-flex">
                  <div class="row h-50">
                     <div class="col middle-line"> </div>
                     <div class="col"> </div>
                  </div>
                  <span class="m-3 avatar-separator"><img class="img-fluid organic-radius border-info" src="img/comment.jpg" alt="avatar"></span>
                  <div class="row h-50">
                     <div class="col"> </div>
                     <div class="col"> </div>
                  </div>
               </div>
               <div class="col-sm">
                  <!--spacer-->
               </div>
            </div>
         </div>
         <!-- End of Timeline -->
      </div>
   </div>
</div>

        </div> 
    </section>

   
    <div id="particles-js2"></div>

    <section id="blog">
        <div class="container">
        <div class="row">
  <div class="col-12">
    <div class="intro">
      <h1 style="font-family: 'Mansalva', cursive;">Notre blog</h1>
      <p class="mx-auto">Vous pouvez trouver des directions et des conseils dans les domaines que nous offrons</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
        <div class="post-slide">
          <div class="post-img">
            <img src="img/blog1.jpg" alt="">            
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
                        
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Conseils outillage : Les 10 des erreurs à éviter en bricolage</a>
            </h3>
          <div class="acrticle">
            <p>
            1. Ne pas préparer le chantier <br>
                            2. Ne pas disposer du bon matériel (outils) <br>
                            3. Utiliser un nettoyant pour drain à tort et à travers<br>
                            4. Ne pas faire attention au positionnement de ses mains <br>
                                    </p>
                                    <p class="moretext1">
                                    5. Etre trop ambitieux au début <br>
                                    6. Oublier de couper l’eau <br>
                                    7. Utiliser la colle de manière inappropriée <br>
                                    8. Ne pas écouter les conseils d’autres bricoleurs <br>
                                    9. Négliger le code local <br>
                                    10. Oublier d’immobiliser les pièces avant usinage <br>
                                    </p>
                            </div>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button1"  class="read-more">Lire la suite</a>
                        </div>
                    </div>
                    
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="img/blog2.jpg" alt="">            
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">10 trucs infaillibles pour bien choisir sa couleur de peinture</a>
                            </h3>
                            <div class="acrticle">
                                    <p>
                            1. APPRENEZ LES TERMES EN LIEN AVEC LA COULEUR <br>
                            2. COMMENCEZ PAR ANALYSER VOTRE PIÈCE <br>
                            3. APPLIQUEZ CES QUELQUES RÈGLES D’OR <br>
                            4. TROUVEZ L’AGENCEMENT DE COULEURS PARFAIT <br>
                            5. REGARDEZ LES PIÈCES ADJACENTES <br>
                            6. PENSEZ À VOS ÉMOTIONS <br>
                            7. NE VOUS LAISSEZ PAS PIÉGER PAR LE NUANCIER <br>
                            8. TESTEZ L’EFFET DE L’ÉCLAIRAGE SUR VOTRE COULEUR
                            </p>
                            <p class="moretext2">
                            9. PRÉVOYEZ QUE LE TYPE DE FINI A UN IMPACT SUR LE RÉSULTAT FINAL <br>
                            10. UTILISEZ LES OUTILS NUMÉRIQUES CRÉÉS POUR VOUS AIDER <br>

                            </p>
                            </div>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button2"  class="read-more">Lire la suite</a>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="img/blog3.jpg" alt="">            
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">10 outils pour vous faciliter le bricolage</a>
                            </h3>
                            <div class="acrticle">
                                    <p>
                                    1. La visseuse-dévisseuse <br>
                            2. Le bracelet magnétique <br>
                            3. Les gants anti-coupure <br>
                            4. La vis sans cheville <br>
                            5. La clé multi-fonctions auto-serrante <br>
                            6. L’échelle télescopique portable pliante <br>
                            7. Le télémètre laser <br>
                            8. La jauge de contour <br>
                            9. Les croisillons carrelage auto-nivelant <br>

                                    </p>
                                    <p class="moretext3">
                            10. La trousse à outils bien ranger <br>
                                    </p>
                                </div>
                            
                            
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button3"  class="read-more">Lire la suite</a>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="img/blog4.jpg" alt="">            
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Comment élaborer un plan de pose pour son carrelage ?</a>
                            </h3>
                            
                                <div class="acrticle">
                                    <p>
                                    1. Mesurez la surface à carreler Si la pièce que vous souhaitez recouvrir n’est pas parfaitement rectangulaire, divisez-la en rectangles et additionnez-en les surfaces pour obtenir une surface complète en m². <br>
                                    </p>
                                    <p class="moretext4">
                                    2. Créez un schéma de pose de vos carreaux Sur une feuille, tracez le plan de la surface à carreler, avec vos différents rectangles. Ce plan est très utile. Il vous servira de guide tout au long de votre travail de pose. <br>
                                    3. Comptez le nombre de carreaux dont vous aurez besoin Pour ce faire, prenez comme mesure de base, la taille des carreaux que vous souhaitez poser. <br> 
                                    Par exemple des carreaux de 25cm x 25cm. <br>
                                    Convertissez en mètre : 25cm x 25cm = 0,25m x 0,25m. <br>
                                    Multipliez cette mesure : 0,25m x 0,25m = 0,06 m². <br>    
                                    4. Faîtes une simulation de pose de vos carreaux Une fois vos carreaux achetés, faîtes une simulation de pose : <br> 

                                    Tracez une perpendiculaire au centre de votre surface et débutez votre simulation en ce point central. Aidez-vous d’un cordeau à poudre pour marquer ces lignes. <br>
                                    </p>
                                </div>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button4"  class="read-more">Lire la suite</a>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="img/blog5.jpg" alt="">            
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Comment bricoler en sécurité : suivez nos 10 conseils</a>
                            </h3>
                            <p class="post-description">
                            <div class="article">
                                <p>
                                1 Les indispensables Équipements de Protection Individuelle (EPI). <br>
                                2 Sécurisez votre espace de bricolage : éloignez les enfants et les animaux domestiques. <br>
                                3 Restez vigilant et concentré lorsque vous bricolez. <br>
                                4 Vérifiez le bon état de marche de vos outils et maintenez-les en bon état. <br>
                               
                                </p>
                                <p class="moretext5">
                                5 Lisez attentivement les instructions d’utilisation de vos outils électriques. <br>
                                6 Si vous effectuez des travaux dans une pièce de la maison, aérez bien celle-ci à la fin des travaux et prenez soin de la nettoyer. <br>
                                7 Ne fumez pas pendant vos travaux de bricolage. <br>
                                8 Si vous effectuez des travaux en hauteur, ne restez pas seul ! <br>
                                9 Rangez bien votre espace de travail, une fois votre bricolage terminé. <br>
                                10. N’hésitez pas à faire appel à des professionnels si vous ne vous sentez pas à l’aise ! <br>
                               </p>
                            </div>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button5"  class="read-more">Lire la suite</a>
                        </div>
                    </div>

                    <div class="post-slide">
                        <div class="post-img">
                            <img src="img/blog6.jpg" alt="">            
                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="#">Voici nos 10 conseils de jardinage : </a>
                            </h3>
                            <p class="post-description">
                            <div class="article">
                                <p>
                                    1. Vos arbres ou haies de plus de 2 mètres doivent impérativement se situer à 2 mètres du mur ou de la clôture séparant votre terrain de celui du voisin. <br>
                                    2. Si vous comptez faire un compost veillez à l’installer loin de votre habitation ainsi que de celle des voisins à cause des odeurs.  <br>
                                    3. Les arbres fruitiers doivent avoir assez d’espace pour s’étendre et s’épanouir. <br>
                                </p>
                                <p class="moretext6">
                                    4. Si vous faîtes un potager, placez-le en plein soleil pour une meilleure croissance de vos légumes.  <br>
                                    5. L’arrosage se fait en début de matinée ou en soirée quand le soleil n’est pas encore trop chaud. Par ailleurs une terre plus froide retient mieux les eaux. <br>
                                    6. On n’arrose que les pieds des plantes, pas les feuilles afin d ‘éviter les maladies. N’oubliez pas que les plantes boivent par les racines. <br>
                                    7. Avant de planter, informez-vous des fleurs ou arbres qui vont bien ensemble. Vous aurez ainsi une meilleure harmonie dans votre jardin. Il faut éviter qu’une plante n’en étouffe une autre. <br>
                                    8. Certains insectes sont bénéfiques à vos plantes comme les coccinelles qui mangent les pucerons. Vous pouvez leur installer un nichoir. Attention aux doryphores si vous plantez des patates. <br>
                                    9. Vous pouvez détourner une de vos gouttières facilement afin de récolter de l’eau de pluie dans un fût pour un arrosage plus économique. 10. <br>
                                </p>
                            </p>
                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                            <a  id="moreless-button6"  class="read-more">Lire la suite</a>
                        </div>
                    </div>
                    </div>
    </div>
  </div>
</div>
        </div> 
    </section>
    
<footer class="text-center text-lg-start bg-white text-muted">
  <section>
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <a href="#home"><img src="img/logo2-02.png" alt=""></a>
          <p>
            Mon Eco Brico à votre service
          </p>
        </div>
    
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4 text-center">
          Réseaux sociaux
          </h6>
          <div class="col-auto social-icons text-center">
            <a href="https://www.facebook.com/monecobrico"><i class='bx bxl-facebook'></i></a>
            <a href="https://instagram.com/decoration._.2022?igshid=YmMyMTA2M2Y="><i class='bx bxl-instagram'></i></a>
          </div>
        </div>
       
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-center">

          <h6 class="text-uppercase fw-bold mb-4">
          LIENS UTILES
          </h6>
          <p>
            <a href="#home" class="text-decoration-none">Accueil</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#services">Principe</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#portfolio">Service</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#reviews">Commentaires</a>
          </p>
          <p>
            <a class="text-decoration-none" href="#milestone2">Stratégie</a>
          </p>
          <p>
            <a style="font-family: 'Mansalva', cursive;font-weight: lighter;line-height: 1.7;" class="text-decoration-none" id="FontBlog" href="#blog">Blog</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3 text-secondary"></i>   </p>
            <p>
                <i class="fas fa-envelope me-3 text-secondary"></i>MonEcoBrico@gmail.com</p>
            <p><i class="fas fa-phone me-3 text-secondary"></i> +212 6 87 85 16 84</p>
            <p><i class="fas fa-print me-3 text-secondary"></i> +212 6 87 85 16 84</p>
        </div>

    </div>
  </section>
</footer>

<div class="buttom-nav">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p style="font-weight: lighter;"> <i class=''></i> Copyright © 2022  - MON ECO BRICO </p>
                    <p> <i class=''></i> </p>
                </div>
                <div class="col-auto social-icons">
                   
                <div class="col-auto social-icons text-center">
                    <p style="font-weight: lighter;">Created by</p>
                    <a href="https://github.com/Akarid-abde"><i class='bx bxl-github'></i></a>
                </div>

                </div>
            </div>
        </div>
</div>



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


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/animatioblogs.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="js/animationbackground.js"></script>


</body>
</html>