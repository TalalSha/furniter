<?= getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                    <div class="col-md-12">
                        <label class="control-label">offer<span style="color: red">*</label>
                        <textarea name="page_title" class="form-control" required="required" rows="3"><?php echo $row['page_title']; ?></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <h3>Meta Tags</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6">
                        <label class="control-label">Meta Title <span style="color: red">*</label>
                        <textarea name="meta_title" class="form-control" required="required" rows="3"><?php echo $row['meta_title']; ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="control-label">Meta Keywords <span style="color: red">*</label>
                        <textarea name="meta_keywords" class="form-control" required="required" rows="3"><?php echo $row['meta_keywords']; ?></textarea>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12">
                        <label class="control-label">Meta Description <span style="color: red">*</label>
                        <textarea name="meta_description" class="form-control" required="required" rows="3"><?php echo $row['meta_description']; ?></textarea>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                      <h3> Main Slider</h3>
                        <div class="form-group">

                      <div class="col-md-12">
                        <table class="table table-bordered newTable" id="newTable">
                            <tr style="background-color: #eee">
                                <th width="5%">Image</th>
                                
                                <th width="5%">Order#</th>
                                <th width="4%" class="text-center"><a href="javascript:void(0)" id="addNewRowTbl" class="addNewRowTbl"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                            </tr>
                            <?php $sec6s = getMultiText('slider-sec'); ?>
                            <?php if (count($sec6s) > 0) { $sec6s_count = 1; ?>
                            <?php foreach ($sec6s as $sec6) { ?>
                                <tr>
                                    <td>
                                        Image <br>Notes: Image dimention : 300px x 230px
                                        <div id="imgDiv">
                                            <input type="file" name="sec6_image[]" accept="image/*" id="newImgInput" style="display: none;" />
                                            <img src="<?php echo getImageSrc('./uploads/images/'.$sec6->image); ?>" style="width: 100%; cursor: pointer;" id="newImg"> 
                                            <input type="hidden" name="sec6_pics[]" value="<?= $sec6->image; ?>"> 
                                        </div>
                                    </td>
                                   
                                    <td>
                                        <input type="number" name="sec6_order_no[]" id="sec6_order_no" value="<?= $sec6->order_no; ?>" class="form-control" placeholder="Order#">
                                    </td>
                                    <td class="text-center">
                                        <?php if ($sec6s_count > 1) { ?>
                                            <a href="javascript:void(0)" id="delNewRowTbl" class="delNewRowTbl"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php $sec6s_count++; ?>
                            <?php } ?>
                            <?php }else{ ?>
                                <tr>
                                    <td>
                                        <div id="imgDiv">
                                            <input type="file" name="sec6_image[]" accept="image/*" id="newImgInput" style="display: none;" />
                                            <img src="<?php echo getImageSrc('./uploads/images/'); ?>" style="width: 100%; cursor: pointer;" id="newImg">
                                        </div>
                                    </td>
                                   
                                    <td>
                                        <input type="number" name="sec6_order_no[]" id="sec6_order_no" value="" class="form-control" placeholder="Order#">
                                    </td>
                                    <td class="text-center">
                                    </td>
                                </tr>  
                            <?php } ?>                  
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
         </div>


            <div class="form-group">
              <div class="row">
                <div class="col-md-12">
                        <h3> Card1 Body </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section2_heading" class="control-label">Card main Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section2_heading" id="section2_heading" value="<?= $row['section2_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>                            
                            
                        </div>
                     </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Image <br>Notes: Image dimention : 605px x 440px
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? get_site_image_src("images/", 
                                             $row['image1']) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"
                                         style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" 
                                            <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                                <label for="img1_heading" class="control-label"> Card1heading <span class="symbol required">*</span></label>
                                <input type="text" name="img1_heading" id="img1_heading" value="<?= $row['img1_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img1_heading2" class="control-label"> Card1heading <span class="symbol required">*</span></label>
                                <input type="text" name="img1_heading2" id="img1_heading2" value="<?= $row['img1_heading2'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img1_link_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="img1_link_text" id="img1_link_text" value="<?= $row['img1_link_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img1_link_url" class="control-label"> Button URL <span class="symbol required">*</span></label>
                                <input type="text" name="img1_link_url" id="img1_link_url" value="<?= $row['img1_link_url'] ?>" class="form-control" required>
                            </div>  
                    <div class="clearfix"></div>
                    
                    <div class="col-md-12">
                        <h3> Card1 images </h3>
                    </div>
                    <?php for($i = 1; $i <= 4; $i++):?>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Image <br>Notes: Image dimention : 80px x 80px
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?= !empty($row['image'.($i+1)]) ? get_site_image_src("images/", $row['image'.($i+1)]) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image<?=($i+1)?>" accept="image/*" <?php if(empty($row['image'.($i+1)])){echo 'required=""';}?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                      <label for="cat1_heading<?=$i?>" class="control-label"> category heading<?=$i?> <span class="symbol required">*</span></label>
                                      <input type="text" name="cat1_heading<?=$i?>" id="cat1_heading<?=$i?>" value="<?= $row['cat1_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endfor?>
                 </div>
                     </div>
                </div>
            </div>
            <div class="clearfix"></div>
<!------ starting card2 body===========================================---->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <h3> Card2 Body </h3>
                    </div>
                    <div class="col-md-12">
                       
                            <div class="clearfix"></div>                            
                            
                        </div>
                     </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Image <br>Notes: Image dimention : 605px x 440px
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image6']) ? get_site_image_src("images/", 
                                             $row['image6']) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image6" accept="image/*" 
                                            <?php if(empty($row['image6'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                                <label for="img2_heading" class="control-label"> Card2heading <span class="symbol required">*</span></label>
                                <input type="text" name="img2_heading" id="img2_heading" value="<?= $row['img2_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img2_heading2" class="control-label"> Card2heading <span class="symbol required">*</span></label>
                                <input type="text" name="img2_heading2" id="img2_heading2" value="<?= $row['img2_heading2'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img2_link_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="img2_link_text" id="img2_link_text" value="<?= $row['img2_link_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="img2_link_url" class="control-label"> Button URL <span class="symbol required">*</span></label>
                                <input type="text" name="img2_link_url" id="img2_link_url" value="<?= $row['img2_link_url'] ?>" class="form-control" required>
                            </div>  
                    <div class="clearfix"></div>
                    
                    <div class="col-md-12">
                        <h3> Card2 images </h3>
                    </div>
                    <?php for($i = 1; $i <= 4; $i++):?>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Image <br>Notes: Image dimention : 80px x 80px
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?= !empty($row['image'.($i+6)]) ? get_site_image_src("images/", 
                                                        $row['image'.($i+6)]) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image<?=($i+6)?>" accept="image/*" <?php if(empty($row['image'.($i+6)])){echo 'required=""';}?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-12">
                                      <label for="cat2_heading<?=$i?>" class="control-label"> category heading<?=$i?> <span class="symbol required">*</span></label>
                                      <input type="text" name="cat2_heading<?=$i?>" id="cat2_heading<?=$i?>" value="<?= $row['cat2_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endfor?>
                 </div>
                 <div class="clearfix"></div>
                 <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <h3> Discount offer </h3>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                     Image <br>Notes: Image dimention : 330px x 330px
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image11']) ? get_site_image_src("images/",
                                     $row['image11']) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image11" accept="image/*" 
                                            <?php if(empty($row['image11'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                                <label for="discount_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="discount_text" id="discount_text" value="<?= $row['discount_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="discount_link_url" class="control-label"> Button URL <span class="symbol required">*</span></label>
                                <input type="text" name="discount_link_url" id="discount_link_url" value="<?= $row['discount_link_url'] ?>" class="form-control" required>
                            </div>  
                    </div> 
                    
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="discount_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="discount_heading" id="discount_heading" value="<?= $row['discount_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="clearfix"></div>                            
                            <div class="col-md-12">
                                <label for="discount_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                <textarea name="discount_detail" rows="3" class="form-control ckeditor"><?= $row['discount_detail'] ?></textarea>
                            </div>
                            <div class="clearfix"></div>
                            
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
                
            </div>     
            </div><br><br>
            <div class="form-group">
            <h3> Clients Info</h3>
                <div class="row">
                    <div class="col-md-12">
                    <label for="section2_heading" class="control-label"> Heading<span class="symbol required">*</span></label>
                                      <input type="text" name="section2_heading" id="section2_heading" value="<?= $row['section2_heading'] ?>" class="form-control" required>
                    </div>

                   <div class="clearfix"></div>      

                     </div>
                </div>     
           

                  <!------SAVE BUTTON PART-------------------------------------------->            
            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>