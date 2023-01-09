<?php foreach($products1 as $cat) { ?>
                <li>
                        <div class="inner">
                            <img src="<?= get_site_image_src("images", $cat->image, 'thumb_'); ?>" alt="" data-src="<?= get_site_image_src("images", $cat->image, 'thumb_'); ?>">
                            <div class="overlay">
                                <a href="<?=base_url()?>product/<?=doEncode($cat->id)?>" class="view"><i class="fi-link"></i></a>
                                <a href="javascript:void(0)" class="cart"   data-id="<?= $cat->id?>" data-des="<?= $cat->description?>" data-image="<?= $cat->image?>" data-name="<?= $cat->title?>" data-price="<?= $cat->price?>"><i class="fi-cart"></i></a>
                            </div>
                        </div>
                        <div class="rsBar">
                            <h4><?=$cat->title?></h4>
                            <span class="price">$<?=$cat->price?></span>
                        </div>
                    </li>
                    <?php } ?>