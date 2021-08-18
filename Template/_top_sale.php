<?php
$product_shuffle = $product->getData();
shuffle($product_shuffle);
if(isset($_POST['sale_submit'])){
    $cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
?>
<section  id="top-sale">
    <div class="container py-5" >
        <h1 class="font-rubik font-size-20">Top Sale</h1>
        <hr>
        <!--Owl Carousel-->
        <div class="owl-carousel owl-theme">
<?php foreach ($product_shuffle as $item):  ?>
            <div class="item py-2 ">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','products.php',$item['item_id']); ?>"><img src="<?php echo $item['item_image'] ?? '/assets/products/1.pnp';?>" class="img-fluid" alt="product1"></a>

                    <div class="text-center">
                        <h6 class="py-2 text-center"><?php echo $item["item_name"]; ?></h6>

                        <div class="rating text-warning font-size-12">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>

                        <div class="price py-2">
                            <span><?php echo $item["item_price"]; ?></span>
                        </div>

                        <form method="post">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                            <button type="submit" name="sale_submit" class="btn btn-warning font-size-12">Add to cart</button>
                        </form>

                    </div>

                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>

</section>