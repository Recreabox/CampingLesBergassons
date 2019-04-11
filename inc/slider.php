<!DOCTYPE html>
<html>
     <head>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.css">
      <link rel="stylesheet" href="../css/slider.css">

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery.equalheights@1.5.3/jquery.equalheights.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slippry/1.4.0/slippry.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

     <script>
     $(document).ready(function(){
        jQuery('#slippry').slippry()       
     }); 
    function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}

     </script>
        

     </head>
     <body class="page1" id="top">
<!--==============================header=================================-->
<header>

  <div class="container_12">

      <div class="clear"></div>
      <div class="marge">
          <h3 class="titremarge">ACCUEIL CAMPING</h3>
      </div>

  <ul id="slippry">
    <li>
      <a href="#slide1"><img src="../photo/diapo1.png" alt="Château de Gîcon"></a>
    </li>
    <li>
      <a href="#slide1"><img src="../photo/diapo2.png" alt="Vendanges de l'Histoire"></a>
    </li>
    <li>
      <a href="#slide1"><img src="../photo/diapo3.png" alt="Le Visiatome de Marcoule"></a>
    </li>
  </ul> 
      
  </div>
</header>  

 
</section>
<!--==============================Bot_block=================================-->


    <script type="text/javascript">
      
      $( '#carousel' ).elastislide( {
        minItems : 8
      } );
      
    </script>
</body>
</html>

