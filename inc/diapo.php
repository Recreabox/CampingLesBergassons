<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet"  type="text/css" href="../css/diapo.css">
    <link rel="stylesheet" title="home" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />



    <title>Diaporama2</title>

</head>



<!-- Slider main container -->
<div class="swiper-container imageGallerySlider">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">


        <!-- Slides -->
        <div class="swiper-slide">
            <img src="../photo/diapo1.jpg" alt="Image One" />
            <span class="slideCaptionText">Image 1 Description</span>

        </div>

        <div class="swiper-slide">
            <img src="https://content.pncmc.com/local/pnc/imageslider/sample_image_2.jpg" alt="Image Two" />
            <span class="slideCaptionText">Image 2 Description</span>

        </div>

        <div class="swiper-slide">
            <img src="https://content.pncmc.com/local/pnc/imageslider/sample_image_3.jpg" alt="Image Three" />
            <span class="slideCaptionText">Image 3 Description</span>
        </div>

    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <div class="caption-box">
        <span class="caption-text">80 Characters are only limited. That’s right, you read this right! Dammnit.</span>
        <div class="caption-icon"></div>
    </div>

    <!-- Add Pagination -->
    <div class="swiper-pagination imageGallerySwiperPagination"></div>
</div>


<script type="text/javascript" src="diapo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>



