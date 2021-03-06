<?php
$item_id = $_GET['item_id'] ?? 1;
foreach($product->getData() as $item):
    if($item_id == $item['item_id']):
?>
<section id="product" class="py-3">
    <div class="container py-5" >
        <div class="row">

            <div class="col-sm-6 text-center">
                <img src="<?php echo $item['item_image'] ?? "assets/products/1.png"; ?>" alt="Product" class="w-100 img-fluid">

                <div class="form-row pt-4 font-size-16 font-baloo">

                    <div class="col flex-box py-2">
                        <button type="submit" class="btn btn-danger   " style="width:160px">Proceed to buy</button>  <button type="submit"class="mx-1  btn btn-warning"  style="width:160px" >Add to cart</button>
                    </div>

                </div>
            </div>

            <div class="col-sm-6">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Samsung S10"; ?></h5>
                <small><?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">20.534 Ratings 100+ answer</a>
                </div>
                <hr class="m-0">
                <!--Product pricing-->
                <table class="my-3">
                    <tr class="font-rale font-size-14 text-left">
                        <td>M.R.P</td><td><s>£162.00</s></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal price</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price'] ?? "0"; ?></span><small> Incluive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You save</td>
                        <td ><span class="font-size-20 text-danger">£152.00</span></td>
                    </tr>
                </table>
                <!--Product pricing-->

                <!--Policy-->
                <div  id="policy">
                    <div class="d-flex">
                        <div class="return text-center ">
                            <div class="font-size-20 my-2 ">
                                <span class="fa fa-retweet border p-3  rounded-pill " style="color:skyblue"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>

                        <div class="return text-center mx-5">
                            <div class="font-size-20 my-2 ">
                                <span class="fa fa-truck border p-3  rounded-pill " style="color:skyblue"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivered</a>
                        </div>

                        <div class="return text-center mx-5">
                            <div class="font-size-20 my-2 ">
                                <span> <i class="fa fa-check border p-3  rounded-pill " style="color:skyblue"></i></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                        </div>
                    </div>
                </div>
                <!--Policy-->
                <hr>
                <!--Order Details-->
                <div class="order-details font-rale d-flex flex-column text-dark">
                    <small>Delivered by 20 March - 01 April</small>
                    <small><a href="#">Sold By Daily Electronics </a> (4.5 out of 5 - 18,998 Ratings)</small>
                    <small class="my-1"><i class="fa fa-map-marker" style="color:navy"></i> Deliver to customer 42420</small>
                </div>
                <!--Order Details-->
                <hr>

                <div class="row">
                    <div class="col-6">
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color</h6>
                                <div class="p-2 background-yellow rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary rounded-circle"><button class="btn font-size-14"></button></div>
                                <div class="p-2 color-secondary rounded-circle"><button class="btn font-size-14"></button></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-in="pro1"><i class="fa fa-angle-up"></i> </button>
                                <input type="text" data-in="pro1" class="qty_input border px-2 w-50 bg-light"  value="1" placeholder="1" disabled>
                                <button class="qty-down border bg-light" data-in="pro1"><i class="fa fa-angle-down"></i> </button>
                            </div>

                        </div>
                    </div>
                </div>

                <!--size-->
                <div class="size">
                    <div class="my-5">
                        <div class="d-flex justify-content-between w-75">
                            <div class="font-rubik border p-2">
                                <button class="font-size-14 p-1">4GB Ram</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="font-size-14 p-1">6GB Ram</button>
                            </div>
                            <div class="font-rubik border p-2">
                                <button class="font-size-14 p-1">8GB Ram</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Size-->

            </div>

            <div class="col-12">
                <h6 class="font-rubik py-3">Product Decription</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, libero placeat autem ipsa repudiandae sint ducimus ratione fuga natus nostrum similique consequatur, numquam, reprehenderit laborum labore minus cum enim. Nulla?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, libero placeat autem ipsa repudiandae sint ducimus ratione fuga natus nostrum similique consequatur, numquam, reprehenderit laborum labore minus cum enim. Nulla?</p>
            </div>

        </div>
    </div>
</section>
<?php
endif;
endforeach;
?>