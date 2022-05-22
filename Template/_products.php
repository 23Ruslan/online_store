<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (isset($_POST['product_submit'])){
                $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
            }
        }
?>
<section id="product" class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png"?>" alt="product" class="img-fluid">
                        <div class="form-row pt-2 font-size-16 font-baloo">
                            <div class="col">
                                <a href="delivery.php"><button type="submit" class="btn btn-danger form-control">PAY NOW</button></a>
                            </div>
                            <div class="col">
                                <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <?php
                                if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">Already in Cart</button>';
                                }else{
                                    echo '<button type="submit" name="product_submit" class="btn btn-warning font-size-16 form-control">Add to My Cart</button>';
                                }
?>
</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-4">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                        <small>brand: <?php echo $item['item_brand'] ?? "Brand";?></small>
                        <br><a href="#" class="font-rale font-size-14">975 ratings</a>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                        </div>
                        <hr class="m-1">
                        <table class="my-2">
                            <tr class="font-rale font-size-14">
                                <td>price </td>
                                <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0;?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                            </tr>
                        </table>
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-4">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">70 Days <br> replacement</a>
                                </div>
                                <div class="return text-center mr-4">
                                    <div class="font-size-20 my-3 color-second">
                                        <span class="fas fa-truck  border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">Great <br>delivery</a>
                                </div>
                                <div class="return text-center mr-4">
                                    <div class="font-size-20 my-2 color-second">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                    </div>
                                    <a href="#" class="font-rale font-size-12">500 days<br>warranty</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div id="order-details" class="font-rale d-flex flex-column text-dark">
                            <small>Approximate delivery time: Mar 8 — Apr 13</small>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="color my-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">colors</h6>
                                        <div class="p-3 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-3 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-3 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="size my-4">
                            <h6 class="font-baloo">size </h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-3">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                                <div class="font-rubik border p-3">
                                    <button class="btn p-0 font-size-14">16GB RAM</button>
                                </div>
                                <div class="font-rubik border p-3">
                                    <button class="btn p-0 font-size-14">32GB RAM</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik">description:</h6>
                        <hr>
                        <p class="font-rale font-size-16">If you are looking to replace your old desktop 
                            computer for something more mobile and possibly more powerful, you should consider 
                            laptops. Laptops are basically machines that give you the complete experience of using 
                            a full fledged computer in a smaller package. There are many options and with names like 
                            laptops, netbooks, notebooks, mobile PCs, and ultra books, choosing one can be confusing. 
                            In all fairness the difference between the terms is not well defined and is as vague as it 
                            gets. On the upside, laptop computers have reached a stage where, for the most part, they are 
                            capable of equaling or even outperforming their desktop counterparts.</p>
                        <p class="font-rale font-size-16">There are enough brands and models in the market that will help 
                            you find a laptop that fits into every one of your specifications, so search through the market 
                            thoroughly and use search engines and sites that allow comparisons before you make a purchase. It 
                            is quite simple to make an informed decision with the tools available online.</p>
                    </div>
                </div>
            </div>
        </section>
<?php
endif;
endforeach;
?>