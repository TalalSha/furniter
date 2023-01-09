<?php
$i = 1;if ($carts){ ?>
<?php foreach($carts as $cart){?>
<li>
<input type="hidden" name="rowid" value="<?=$cart['rowid']?>" class="row_id<?=$i?>" >
    <div class="pro_cart">
        <div class="ico">
            <a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><img src="<?= get_site_image_src("images/", $cart['image']); ?>" alt=""></a>
        </div>
        <div class="pro_name">
            <h4><a href="<?=base_url()?>product/<?=doEncode($cart['id'])?>"><?=$cart['name']?></a></h4>
        </div>
    </div>
    <div class="qtyBtn">
                <input type="button" value="-" class="qtyminus readBtn">
                <input type="button" name="quantity" value="<?=$cart['qty']?>" class="qty">
                <input type="button" value="+" class="qtyplus readBtn">
            </div>
    
    <div class="price_cart " id="dl" >
        <div class="price"><?=$cart['price']?></div>
        <span class="closeBtn"  id="<?=$i?>"><samp>Delete</samp></span>
    </div>
</li>
<div class="orderTable">
<table>
<tr>
                            <td>Subtotal:</td>
                            <td class="price">$ <?= $this->cart->format_number($cart['subtotal']); ?></td>
                        </tr>
</table>
</div>
<?php $i++; } ?>
<?php } else{?>
    <div class="bTn text-center">
                    <a href="<?=base_url()?>" class="readBtn">Continue Shopping</a>
                </div>
                <?php } ?>