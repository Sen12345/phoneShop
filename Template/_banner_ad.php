<section id="banner-ad">
    <div class="container py-5 text-center">
        <div class="banner">
            <?php array_map(function($item){?>
            <img src="<?php echo $item['item_image'];?>" alt="Banner ad-1" class="img-fluid">
            <?php  },$product_shuffle); ?>
        </div>
    </div>
</section>