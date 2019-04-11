<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" name="description" content="Le Camping les Bergassons est un camping familial situé à Chusclan, nous aurons le plaisir de vous accueillir sur nos emplacements, caravannes ou mobilhome." />

    <link rel="stylesheet" title="home" type="text/css" href="../css/header.css" />
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png" /> <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png" />
    <script src="http://code.jquery.com/jquery.js"> </script>
    <script src="js/scroll.js"> </script>
</head>


<div class="navigation-bar">
        <div class="navbar-togle" id="js-navbar-togle"></div>
        
        <a class="logo" href="index.php">
            <img src="photo/logo.png" alt="logo">
        </a>

    <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
    </div>

    <input type="checkbox" id="nav-check">
        
    <ul class="navigation-list" id="js-menu">
        <?php if (isset($_SESSION['auth'])): ?>
            <li>	<a href="index.php#page" class="links-nav" id="accueil">Accueil</a>	</li>
            <li>	<a href="#photo" class="links-nav">Hebergement</a>		        </li>
            <li>	<a href="#contact" class="links-nav">Contact</a>			    </li>
            <li>	<a href="account.php" class="links-nav">Mon compte</a>			</li>
            <li>    <a href="logout.php" class="links-nav">Se déconnecter</a>                         </li>
        <?php else: ?>
            <li>	<a href="index.php" class="links-nav" id="accueil">Accueil</a>	</li>
            <li>	<a href="#photo" class="links-nav">Hebergement</a>		        </li>
            <li>	<a href="#contact" class="links-nav">Contact</a>			    </li>
            <li>	<a href="register.php" class="links-nav">S'inscrire</a>		    </li>
            <li>	<a href="login.php" class="links-nav">Se connecter</a>		    </li>
        <?php endif; ?>
    </ul>
</div>
