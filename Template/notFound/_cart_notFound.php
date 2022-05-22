<section id="cart" class="py-4 mb-4">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>
        <div class="row">
            <div class="col-sm-9">
                <div class="row border-top py-2 mt-2">
                    <div class="col-sm-12 text-center py-3">
                    <a href="https://beyondbusinessgroups.com.au/add-a-shopping-cart-to-your-small-business-website/">
                    <img src="./assets/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 204px;"></a>
                    <p class="font-baloo font-size-14 text-black-50">Your cart is empty</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-3">
                <h6 class="font-size-14 font-rale py-4"><em><b>Delivery will be free if the total order price is more than $287</b></em></h6>
                    <div class="border-top py-3">
                        <h5 class="font-baloo font-size-20">subtotal is ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?>):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span> </span> </h5>
                        <a href=delivery.php><button type="submit" class="btn btn-warning mt-4"><em><b>Pay</b></em></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>