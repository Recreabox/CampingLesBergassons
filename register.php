<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Inscription</title>


    <link rel="stylesheet" href="css/register.css">
</head>



<?php

$headers  = "From: < contact@campinglesbergassons.fr >\r\n";

require_once 'inc/functions.php';
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(!empty($_POST)){

    $errors = array();
    require_once 'inc/db.php';

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
        $req->execute([$_POST['username']]);
        $user = $req->fetch();
        if($user){
            $errors['username'] = 'Ce pseudo est déjà pris';
        }
    }



    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Votre email n'est pas valide";
    } else {
        $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        if($user){
            $errors['email'] = 'Cet email est déjà utilisé pour un autre compte';
        }
    }

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }

    if(empty($_POST['name']) ){
        $errors['name'] = "Vous devez rentrer un prénom valide";
    }

    if(empty($_POST['surname']) ){
        $errors['surname'] = "Vous devez rentrer un nom valide";
    }

    if(empty($_POST['phone']) ){
        $errors['phone'] = "Vous devez rentrer un numéro de téléphone valide";
    }

    if(empty($errors)){

        $req = $pdo->prepare("INSERT INTO users SET username = ?, prenom = ?, nom = ?, phone = ?, password = ?, email = ?, confirmation_token = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['username'], $_POST['name'], $_POST['surname'], $_POST['phone'], $password, $_POST['email'], $token]);
        $user_id = $pdo->lastInsertId();
        mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://campinglesbergassons.fr/confirm.php?id=$user_id&token=$token", "$headers");
        $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
        header('Location: login.php');
        exit();
    }



}
?>



<?php require 'inc/header2.php'; ?>


<?php if(!empty($errors)): ?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli le formulaire correctement</p>
    <ul>
        <?php foreach($errors as $error): ?>
           <li><?= $error; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<section class="marge">

</section>

<div class="signup-form">
    <form action="" method="post">

        <h2>Inscription</h2>
        <p class="hint-text">Créez votre compte. C'est gratuit et ne prend que quelques secondes !</p>

        
         <div class="form-group">
            <div class="pseudo"><input type="text" class="form-control" name="username" placeholder="Pseudo" ></div>
         </div>

        <div class="form-group">
            <div class="name"><input type="text" class="form-control" name="name" placeholder="Prénom" ></div>
        </div>

        <div class="form-group">
            <div class="surname"><input type="text" class="form-control" name="surname" placeholder="Nom" ></div>
        </div>


        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" >
        </div>

        <div class="form-group">
            <div class="phone"><input type="text" class="form-control" name="phone" placeholder="Numéro de téléphone" ></div>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" ">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password_confirm" placeholder="Confirmez votre Mot de passe" ">
        </div>

        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required>J'accepte les <a href="#">Termes d'utilisationse</a> &amp; <a href="#">Politique de confidentialite</a></label>
        </div>

        <div class="form-btn">
            <button type="submit" class="submit-btn">S'inscire !</button>
        </div>

    </form>
    <br><div class="text-center">Vous avez deja un compte ? <a href="login.php">Connectez-vous</a></div>
</div>

</section>





<footer>    <?php include("inc/footer.php"); ?>     </footer>
