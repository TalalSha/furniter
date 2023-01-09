                        
                        
                        <li class="_head">
                        <div class="pro_cart">Product</div>
                        
                        <div class="qty_cart">Quantity</div>
                        <div class="price_cart">Price</div>
                        <div class="size_cart">Subtotal</div>
                         </li>
                 <?php $i = 1;  ?>
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
                            <div class="price"><?=$cart['price']?></div>
                            <span class="closeBtn" id="<?=$i?>"><samp>Delete</samp></span>
                        </div>
                        <div class="orderTable">
<table>
<tr>
                            
                            <td class="price">$ <?= $this->cart->format_number($cart['subtotal']); ?></td>
                        </tr>
</table>
</div>
                    </li>
                    <?php $i++; }?>
                    
                       
                        