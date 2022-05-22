<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>
<section id="cart" class="py-3 mb-5">
    <br><div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <div class="row">
            <div class="col-sm-9">
<?php
                foreach ($product->getData('cart') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
?>
                        <div class="row py-2 mt-4">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                                <small>brand: <?php echo $item['item_brand'] ?? "Brand"; ?></small>
 
                                <div>
                                <a href="#" class="font-rale font-size-14">975 ratings</a> <br>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="qty d-flex pt-3">
                                    <div class="d-flex font-rale w-25">
                                        <button class="qty-up border bg-gray" data-id="<?php echo $item['item_id'] ?? '0';?>"><i class="fas fa-angle-up"></i></button>
                                        <input type="text" data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                        <button data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty-down border bg-gray"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger px-3">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="wishlist-submit" class="btn font-baloo text-danger">Save for Later</button>
                                    </form>

                                </div>
                            </div>
                            <div class="col-sm-2 text-center">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0';?>"><?php echo $item['item_price'] ?? 0;?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    }, $cart);
                endforeach;
                ?>
            </div>
            <div class="col-sm-3">
                <div class="sub-total text-center mt-3">
                    <h6 class="font-size-14 font-rale py-2"><em><b>Delivery will be free if the total order price is more than $287</b></em></h6>
                    <div class="py-3">
                    <h5 class="font-baloo font-size-20">Subtotal — <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item(-s):&nbsp; <span class="text-danger">
                        $<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                    <a href=delivery.php><button type="submit" class="btn btn-warning mt-3"><em><b>PAY NOW</b></em></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>