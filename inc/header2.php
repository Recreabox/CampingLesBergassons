<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="description" content="Le Camping les Bergassons est un camping familial situé à Chusclan, nous aurons le plaisir de vous accueillir sur nos emplacements, caravannes ou mobilhome." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/header2_responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_400">
        <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">

            <!-- LOGO -->

            <div class="logo" href="index">
                <a href="index"><img src="../photo/logo.png" alt="logo"></a>
            </div>

            <div class="container">
                <div class="">
                    <div class="col-lg-10 offset-lg-2">
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li class="home" ><a href="index">Accueil</a></li>
                                <li><a href="#photo">Hebergement</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li><a href="booking">Réserver</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="header_right d-flex flex-row align-items-center justify-content-start">

                <!-- Header Links -->
                <div class="header_links">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        <?php if (isset($_SESSION['auth'])): ?>
                            <li class="home"><a href="account.php" >Mon compte</a></li>
                            <li><a href="logout" >Se déconnecter</a></li>
                        <?php else: ?>
                            <li><a href="register">S'inscrire</a></li>
                            <li><a href="login">Se connecter</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

                <!-- Phone -->
                <div class="phones d-flex flex-row align-items-center justify-content-start ">
                    <i class="fa fa-phone " aria-hidden="true"></i>
                    <div class="phone">04 66 90 17 31</div>
                </div>

                <!-- Hamburger -->
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>

            </div>
        </div>
    </header>

    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center">

            <div class="menu_nav trans_500">
                <ul class="text-center">
                    <?php if (isset($_SESSION['auth'])): ?>
                        <li>	<a href="index"  id="accueil">Accueil</a>	</li>
                        <li>	<a href="#photo" >Hebergement</a>		        </li>
                        <li>	<a href="#contact" >Contact</a>			    </li>
                        <li><a href="booking">Réserver</a></li>
                        <li>	<a href="account.php" >Mon compte</a>			</li>
                        <li>    <a href="logout.php" >Se déconnecter</a>                         </li>
                    <?php else: ?>
                        <li>	<a href="index.php"  id="accueil">Accueil</a>	</li>
                        <li>	<a href="#photo" >Hebergement</a>		        </li>
                        <li>	<a href="#contact" >Contact</a></li>
                        <li><a href="booking">Réserver</a></li>
                        <li>	<a href="register" >S'inscrire</a>		    </li>
                        <li>	<a href="login" >Se connecter</a>		    </li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="phones menu_phone d-flex flex-row align-items-center justify-content-start">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div>04 66 90 17 31</div>
            </div>
        </div>
    </div>
</div>

<script src="../js/header.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/ScrollToPlugin.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>

</body>
</html>