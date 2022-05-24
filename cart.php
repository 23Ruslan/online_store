<?php
ob_start();
include ('header.php');?>
<?php
if (!isset($_COOKIE['id'])) {
    ?><br>
    <em> &#160 &#160 &#160 You must log in to open your personal shopping cart and wishlist.  <br>
    &#160 &#160 &#160 Because now you are in a corporate shopping cart. The corporate shopping cart is edited by all employees at the same time.</em>
<?php
}
?>
<?php
count($product->getData('cart')) ? include ('template/_cart-template.php') :
    include ('template/notFound/_cart_notFound.php');
count($product->getData('wishlist')) ? include ('template/_wishlist_template.php') :
    include ('template/notFound/_wishlist_notFound.php');
include ('template/_new-laptops.php');
?>
<?php
include ('footer.php');
?>