


<section class="subBanner" id="aboutBanner">
    <div class="container relative _inner regular text-center">
        <h1 class="mx_bold">Shopping Cart</h1>
        <ul>
            <li><a href="<?=base_url()?>">Home</a></li>
            <li>/</li>
            <li>Shopping Cart</li>
        </ul>
    </div>
</section><!-- subBanner -->


<section id="shopCart" class="sec_marg">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 LSide">
                <ul class="checkList"  id="new">
                    <li class="_head">
                        <div class="pro_cart">Product</div>
                        
                        <div class="qty_cart">Quantity</div>
                        <div class="price_cart">Price</div>
                        <div class="price_cart">Subtotal</div>
                    </li>
                    <?php $i = 1; ?>
                    <?php foreach($carts as $cart){?>
                    <li>
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><img src="<?= get_site_image_src("images/", $cart['image']); ?>" alt=""></a>
                            </div>
                            <div class="pro_name">
                                <h4><a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><?=$cart['name']?></a></h4>
                                <p><?=$cart['des']?></p>
                            </div>
                        </div>
                        
                        <div class="qty_cart">
                            <div class="qtyBtn">
                                <input type="button" value="-" class="qtyminus readBtn">
                                <input type="button" name="quantity" value="<?=$cart['qty']?>" class="qty">
                                <input type="button" value="+" class="qtyplus readBtn">
                            </div>
                        </div>
                        <div class="price_cart" id="newitm">
                            <div class="price">$<?=$cart['price']?></div>
                            <span class="closeBtn" id="<?=$i?>"><samp>Delete</samp></span>
                        </div>
                        <div class="orderTable">
<table>
<tr>
                            
                            <td class="price">$<?= $this->cart->format_number($cart['subtotal']); ?></td>
                        </tr>
</table>
</div>
                    </li>
                    <?php $i++; }?>
                    <!-- <li>==================================================================
                        <div class="pro_cart">
                            <div class="ico">
                                <a href="?"><img src="images/items/2.png" alt=""></a>
                           
                           
                        <div class="p
                            <div class="price">$ 270.00</div>
                            <span class="closeBtn"><samp>Delete</samp></span>
                        </div>
                    </li=======================================================================================> -->
                </ul>
                <div class="bTn text-center">
                    <a href="<?=base_url()?>" class="readBtn">Continue Shopping</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 RSide">
                <h4>Special Notes and Measurements</h4>
                <textarea class="txtBox" placeholder="Order Notes" id="specialNote"></textarea>
                <div class="orderTable" id="tbl1">
                    <table>
                       
                        <tr>
                            <td>Indication shipping:</td>
                            <td class="price"><span class="color">Free</span></td>
                        </tr>
                        <tr>
                            <td class="bold">Total:</td>
                            <td class="price">$ <?= $this->cart->total($cart['total']); ?></td>
                        </tr>
                    </table>
                </div>
                
                <div class="bTn text-center">
                    <a href="checkout.php" class="readBtn">Checkout</a>
                </div>
                <p class="text-center shortInfo">Free shipping on orders over <span class="price">$250</span> in Canada + US</p>
            </div>
        </div>
    </div>
</section><!-- shopCart -->

