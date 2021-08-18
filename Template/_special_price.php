<?php
$brand = array_map(function($pro){return $pro['item_brand'];}, $product_shuffle);
$unique = array_unique($brand);
sort($unique);

if(isset($_POST['newPhone_submit'])){
    $cart->addToCart($_POST['user_id'],$_POST['item_id']);
}

?>
<section id="special-price">
    <div class="container py-5" >

        <h1 class="font-rubik font-size-20">Special Price</h1>

        <div id="filters" style="width: 100%;text-align: right" class=" button-group py-3">
            <button class="btn is-checked " data-filter="*"> All Brand</button>
         <?php
         array_map(function($brand){
        printf( '<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
            },$unique);
         ?>

        </div>

        <div class="grid">
            <?php array_map(function($item){?>
            <div class="grid-item  border <?php echo $item['item_brand'] ?? "Brand"; ?>">
                <div class="item py-2" style="width:200px">
                    <div class="text-center">
                        <div class="product font-rale">

                            <a href="<?php printf('%s?item_id=%s','products.php',$item['item_id']); ?>"><img style="max-width:200px" src="<?php echo $item['item_image'] ?? "./assets/product/1.php"; ?>" alt="Product image"></a>

                            <h6 class="py-2 text-center"><?php echo $item['item_name'] ?? "./assets/product/1.php"; ?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>

                            <div class="price py-2">
                                <span><?php echo $item['item_price'] ?? "Unknown"; ?></span>
                            </div>

                            <form method="post">
                                <input type="hidden" name="user_id" value="1">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                                <button type="submit" name="newPhone_submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <?php },$product_shuffle); ?>
        </div>

    </div>
</section>