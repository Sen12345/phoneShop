<?php
ob_start();
include('header.php');
shuffle($product_shuffle);
?>
<!-- !tart main-site -->
<main id="main-site">
    <?php include('functions.php'); ?>
    <!--Include banner area-->
    <?php include('./Template/_banner_area.php'); ?>
    <!--End banner area-->

    <!--Top Sale-->
    <?php include('./Template/_top_sale.php'); ?>
    <!--End Top Sale-->

    <!--Special Price-->
    <?php include('./Template/_special_price.php'); ?>
    <!--End Special Price-->

    <!--Banner ad-->
  <?php include('./Template/_banner_ad.php'); ?>
    <!--Banner ad-->

    <!--New Phone-->
 <?php include('./Template/_new_phone.php'); ?>
    <!--New Phone-->

    <?php include('Template/_cart-template.php');?>

    <!--Latest Blog-->

    <!--End Latest Blog-->
   
</main>

<?php include('footer.php'); ?>