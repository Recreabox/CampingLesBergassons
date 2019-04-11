

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" title="home" type="text/css" href="css/contact2.css" />
    <title>Contact</title>
    <link href="http://fr.allfont.net/allfont.css?fonts=montserrat-light" rel="stylesheet" type="text/css" />
</head>




<div class="section-contact" id="contact">
    <div class="contact-box">
      <h3 class="contact-title">
        N'hésitez pas à nous laissez un message !
      </h3>


        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="error-msg">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>


        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="success-msg">
                Votre email a bien été envoyé !
            </div>
        <?php endif; ?>


      <form action="post_contact.php" method="POST">
          <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>

        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]]   feedback-input" placeholder="Nom Prénom" />

          <input name="email" type="text" class="validate[required,custom[email]]   feedback-input" placeholder="Email" />

          <textarea name="message" class="validate[required,length[6,300]]  feedback-input" placeholder="Votre message..."></textarea>

        <input type="submit" value="ENVOYER"/>

      </form>
        <p class="numero-info">04 66 90 17 31</p>
        <p class="adresse-info"> <a href="https://goo.gl/maps/8ibC48oF1vP2" target="_blank">32 Chemin du Ravin,<br> 30200 Chusclan</a></p>
    </div>
</div>


