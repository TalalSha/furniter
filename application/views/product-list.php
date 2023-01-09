
<section class="subBanner" id="aboutBanner" >
    <div class="container relative _inner regular text-center">
        <h1 class="mx_bold">Product List</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>/</li>
            <li>Product List</li>
        </ul>
    </div>
</section><!-- subBanner -->


<section id="proList" class="sec_marg">
    <div class="container regular">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xx-12 LSide ">
                <h3>Categories</h3>
                <ul class="mailBar">
                <?php foreach($cats as $cat) {?>

                    <li><a href="javascript:void(0)" class="cid" data-cid="<?php echo $cat->id?>"><?=$cat->title?></a>
                        <ul class="subCateg ">
                        <?php foreach($cat->sub as $s){?>
                           
                            <li><a href="javascript:void(0)"  class="sid" data-sid="<?= $s->id ?>"><?=$s->title?></a></li>
                            <?php } ?>
                               
                           
                        </ul>
                    </li>
                   
                    <?php }?>
                    <input type="hidden"  name="fcat_id"  id="product"> 
						<input type="hidden"  name="scat_id"  id="cat">
                </ul>                
                <h3>Price Range</h3>
                <div class="rangeSlider">
                    <div id="slider-range"></div>
                    <div class="inputAmount price"><input type="text" id="amount" readonly style="border:0;"></div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6 col-xx-12 RSide itemsf">
                <ul class="proLst" id="fp">
               
                            <div class="inner">
                                <h4><?= $msg ?></h4>
                            </div>
                        
                    <?php if(!empty($catalog)){?>
                 <?php foreach($catalog as $cat) { ?>
                    <li>
                        <div class="inner">
                        <img src="<?= get_site_image_src("images", $cat->image); ?>" alt="" data-src="
                                <?= get_site_image_src("images", $cat->image); ?>">
                            <div class="overlay">
                                <a href="<?=base_url()?>product/<?=doEncode($cat->id)?>" class="view"><i class="fi-link"></i></a>
                                <a href="javascript:void(0)" class="cart" data-id="<?= $cat->id?>" data-des="<?= $cat->description?>" 
                                    data-image="<?= $cat->image?>" data-name="<?= $cat->title?>" data-price="<?= $cat->price?>">
                                     <i class="fi-cart"></i></a>
                            </div>
                        </div>
                        <div class="rsBar">
                            <h4><?=$cat->title?></h4>
                            <span class="price"><?=$cat->price?></span>
                        </div>
                    </li>
                    
                    <?php } ?>
                </ul>
                <?php }else{ echo "No Products available" ; ?>


                    
                    <?php }?>
            </div>
        </div>
    </div>
</section><!-- proList -->
