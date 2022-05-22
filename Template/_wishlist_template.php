<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
        $deletedrecord = $Cart->deleteCart($_POST['item_id'],'wishlist');
    }
    if(isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>
<section id="cart" class="py-4 mb-4">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20"><a name="wishlist"></a>Wishlist</h5>
        <div class="row">
            <div class="col-sm-9">
                <?php
                foreach ($product->getData('wishlist') as $item) :
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                                <small>brand: <?php echo ' '.$item['item_brand'] ?? "Brand"; ?></small>
                                <br><a href="#" class="font-rale font-size-14">975 ratings</a>
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>

                                <div class="qty d-flex pt-3">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 border-right">Delete Item</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn font-baloo text-danger">Add to My Cart</button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-baloo">
                                    $<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0'; ?>"><?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    }, $cart); 
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>