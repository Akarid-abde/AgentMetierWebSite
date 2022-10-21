<?php 

session_start();

include('connection.php');

if(isset($_GET['metiers_id'])){

  $metiers_id = $_GET['metiers_id'];

  $stmt = $conn->prepare("SELECT * FROM metiers WHERE metiers_id = ?");
  $stmt->bind_param('i',$metiers_id);

  $stmt->execute();

  $metier = $stmt->get_result();

}else{
  header("location: index.php");
}
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

    <nav style="background-color:#F25244;height:82px;" class="navbar navbar-expand-lg navbar-light sticky-top">
        <a href="index.php" style="margin-right:0px">
            <video width="160px" style="position: sticky;" autoplay loop muted>
                <source src="img/LogoV.mp4" type="video/mp4">
            </video>
        </a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#services">Principe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#portfolio">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#reviews">Commentaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#timeline">Stratégie</a>
                    </li>
                    <li class="nav-item">
                        <a style="font-family: 'Mansalva', cursive;font-weight: lighter;line-height: 1.7;" class="nav-link" id="FontBlog" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
            </div>
        </div>
    </nav>


    <div id="services" class="text-center mt-4">
            <video width="100%"  autoplay loop muted>
                <source src="img/vediobanner.mp4" type="video/mp4">
            </video>
    </div>

    <section id="about">
        <div class="container">
        <div  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
            <?php while($row = $metier->fetch_assoc()){?>
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"style="background-image: url(img/<?php echo $row['metiers_image']; ?>); min-height:300px;">
                            
                            </div>
                            <div class="col-lg-8">
                                <div>
                                <?php
                                if(isset($_SESSION['st'])){
                                    echo '<div class="alert alert-success" role="alert">'.$_SESSION['st'].'</div>';
                                    unset($_SESSION['st']);
                                }
                                ?>
                                </div>
                                
                                <form  action="mail.php" method="POST" class="p-lg-5 col-12 row g-3">
                                    <div>
                                    <h1><?php echo $row['metiers_description']; ?></h1>
                                    <p><?php echo $row['metiers_détaille']; ?></p>
                                    </div>

                                    <div class="col-lg-6" hidden="true">
                                        <label for="metier" class="form-label" hidden="true">Métier</label>
                                        <input type="text" class="form-control" placeholder="metier" name="metier" id="metier" value="<?php echo $row['metiers_description']; ?>"
                                            aria-describedby="emailHelp" hidden="true">
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Nom</label>
                                        <input type="text" name="nom" class="form-control" placeholder="Abde" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Prénom</label>
                                        <input type="text"  name="prenom" class="form-control" placeholder="Abde" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>

                                    <div class="col-12">
                                        <label for="Téléphone" class="form-label">Téléphone</label>
                                        <input type="tel" name="tele" class="form-control" placeholder="+2126 87 85 16 84" id="Téléphone" >
                                    </div>

                                    <div class="col-12">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Exemple@gmail.com" id="Email">
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Demander</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?> 
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
                                            echo "<script>alert('.$se.')</script>";
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

</body>

</html>