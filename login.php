<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Connexion</title>
    


<link rel="stylesheet"  type="text/css" href="../css/login.css" />
</head>

<?php
require_once 'inc/functions.php';
reconnect_from_cookie();
if(isset($_SESSION['auth'])){
    header('Location: account.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
    $req->execute(['username' => $_POST['username']]);
    $user = $req->fetch();
    if(password_verify($_POST['password'], $user->password)){
        $_SESSION['auth'] = $user;
$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE users SET remember_token = ? WHERE id = ?')->execute([$remember_token, $user->id]);
    setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}
        header('Location: account.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}
?>
<?php require 'inc/header2.php'; ?>



    <div class="login-form">
        <form action="" method="post">


        <h2>Connexion</h2>
        <p class="hint-text">Connectez-vous !</p>
        <div class="form-group">
            <div class="form-group">
                <div class="pseudo"><input type="text" class="form-control" name="username" placeholder="Pseudo" required="required"></div>
            </div>
        </div>


        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Mot de passe" required="required">
        </div>


        <div class="form-group">
            <label for=""> <a href="forget.php"> J'ai oublie mon mot de passse </a> </label>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>


            <button type="submit" class="bouton-connexion">Se connecter</button>
        </form>
        <br><div class="text-center">Vous n'avez pas de compte ? <a href="register.php">Creez en un !</a></div>
    </div>


<?php require 'inc/footer.php'; ?>
