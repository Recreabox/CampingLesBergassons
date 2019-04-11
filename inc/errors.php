<?php

if(empty($_POST['pseudo']) || !preg_match('`^([a-zA-Z0-9-_]+$/', $_POST['pseudo'])){ /* Gestion des erreurs */

$errors['pseudo'] = "Pseudo non valide";
} else {


}

if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))

{

$errors['email'] = "Votre email n'est pas valide";

} else {

$req = $bdd ->prepare('SELECT id FROM Utilisateur WHERE email = ?');
$req ->execute([$_POST['email']]);
$mail = $req ->fetch();
if($mail){

$errors['email'] = "Cet email est deja utilisé";

}

}


if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){

$errors['password'] = "Votre mot de passe n'est pas valide";

}else {

$req = $bdd ->prepare('SELECT id FROM Utilisateur WHERE pseudo = ?');
$req ->execute([$_POST['pseudo']]);
$user = $req ->fetch();
if($user){

$errors['pseudo'] = "Ce pseudo est deja pris";

}
}


if(empty($errors)){ /* S'il n'y a pas d'erreurs enregistrement dans la base de données */
