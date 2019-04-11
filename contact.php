<?php include '_inc.php'; ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" title="home" type="text/css" href="css/contact.css" />
    <link rel="stylesheet" title="home" type="text/css" href="css/font.css" />
    <title>Contact</title>
    <link href="http://fr.allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />
</head>

<?php include("inc/header.php"); ?>

<body>
    <section>

        <div class="conteneur3">

            <div class="element3" id="border-contact">
                <div class="contact">
                    <div class="contact-info">
                        <h3>
                            Adresse :
                        </h3>
                        <p class="adresse">
                            32 Chemin du Ravin, 30200 Chusclan
                        </p>
                        <h3>
                            Téléphone :
                        </h3>
                        <p class="numero">
                            04 66 90 17 31
                        </p>
                    </div>
                </div>
            </div>

            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email a bien été envoyé
                </div>
            <?php endif; ?>

            <div class="element3">
                <div  id="form-div">
                    <form  action=".../post_contact.php" method="POST">
                        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>

                        <div class="name">
                            <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom Prénom" id="name" />
                        </div>

                        <div class="email">
                            <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                        </div>

                        <p class="text">
                            <textarea name="message" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Votre message"></textarea>
                        </p>

                        <div class="submit">
                            <input type="submit" value="Envoyer" id="button-blue"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include("inc/footer.php"); ?>