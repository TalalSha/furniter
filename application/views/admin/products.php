<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update products')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Products</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url(ADMIN . '/products'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmNewsletter" role="form" class="form-horizontal blog-form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="">
                                <!-- <div class="panel-heading col-md-12">
                                    <div class="panel-title"><h3>Meta Information</h3></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Meta Title</label>
                                                <input type="text" name="meta_title" value="<?=$row->meta_title?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Meta Keywords</label>
                                                <input type="text" name="meta_keywords" value="<?=$row->meta_keywords?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">  Meta Description</label>
                                                <textarea  rows="8" class="form-control" name="meta_description" required><?=$row->meta_description?></textarea>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="clearfix"></div>
                                    
                                </div> -->
                                <div class="panel-heading col-md-12">
                                    <div class="panel-title"><h3>Product Basic Information</h3></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <label for="furniture_cat" class="control-label">Furniture Category<span class="symbol required">*</span></label>
                                        <select name="furniture_cat" id="furniture_cat" class="form-control"  required>
                                            <option value=''>-- Select --</option>
                                            <?php foreach ($cats as $index => $c) { ?>
                                                <option value="<?= $c->id ?>"> <?= ($row->furniture_cat_id == $c->id) ? 'selected' : '' ?> <?= $c->title ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-md-12  ">
                                        <label for="sub_id" class="control-label">Sub Category<span class="symbol required">*</span></label>
                                        <select name="sub_id"  id="sub_id" class="form-control sub_c" required>
                                            <option value=''>-- Select --</option>
                                            <?php foreach ($sub as $index => $c) { ?>
                                                <option value="<?= $c->id ?>" <?= ($row->sub_id == $c->id) ? 'selected' : '' ?>> <?= $c->title ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                   
                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">Product Title</label>
                                                <input type="text" name="title" value="<?=$row->title?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">  Description</label>
                                                <textarea  rows="8" class="form-control ckeditor" name="description" required><?=$row->description?></textarea>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="clearfix"></div>
                                </div>
                                

                                <div class="panel-heading col-md-12">
                                    <div class="panel-title"><h3>Price</h3></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">Price</label>
                                                <input type="text" name="price" value="<?=$row->price?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="clearfix"></div>
                                </div>

                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="panel panel-default">
                                <!-- <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-picture-o"></i> Thumbnail </div>
                                <div class="panel-body thumbnail_blog" style="padding: 10px" id="imgDiv">
                                    <img src="<?= !empty($row->image) ? get_site_image_src("blogs/", $row->image, '700p_') : 'http://placehold.it/3000x1000' ?>" style="width: 100%; cursor: pointer;" id="newImg">
                                    <input type="file" name="image" accept="image/*" id="imgInput">
                                </div> -->
                                <div class="panel-body">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                                <img src="<?= !empty($row->image) ? get_site_image_src("images/", $row->image) : base_url('assets/images/no-image.svg')  ?>" alt="--">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                            <div>
                                                                <span class="btn btn-white btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="image" accept="image/*" <?php if(empty($row->image)){echo 'required=""';}?>>
                                                                </span>
                                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                            
                                           
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-eye" aria-hidden="true"></i> Display Options</div>
                                <div class="panel-body" style="padding: 15.5px 0px">                    

                                    <div class="col-md-7">
                                        <h5>Active</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="btn-group" id="status" data-toggle="buttons">
                                            <label class="btn btn-default btn-on btn-sm <?php if($row->status == 1){echo 'active';}?>">
                                            <input type="radio" value="1" name="status"<?php if($row->status == 1){echo 'checked';}?>><i class="fa fa-check" aria-hidden="true"></i></label>
                                          
                                            <label class="btn btn-default btn-off btn-sm <?php if($row->status == 0){echo 'active';}?>">
                                            <input type="radio" value="0" name="status" <?php if($row->status == 0){echo 'checked';}?>><i class="fa fa-times" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
    <!------------------starting product details ------------------------------------------------------>
          
          </div>







              
                                            
                <div class="col-md-12">
          <table class="table table-bordered newTable" id="newTable">
                            <tr style="background-color: #eee">
                            <th width="25%">Image</th>                             
                                <th width="25%">Color</th>
                                <th width="10%">Order#</th>
                                <th width="4%" class="text-center"><a href="javascript:void(0)" id="addNewRowTbl" class="addNewRowTbl"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
                            </tr>
                            <?php $sec6s = getMultiText($row->title); ?>
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
                                        <input type="text" name="sec6_title[]" id="sec6_title" value="<?= $sec6->title; ?>" class="form-control" placeholder="e.g red, blue, green, or #0000">
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
                                        <input type="text" name="sec6_title[]" id="sec6_title" value="" class="form-control" placeholder="e.g red, blue, green, or #0000">
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



                <div class="col-md-12">                
                    <hr class="hr-short">
                    <div class="form-group text-right">
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
<?php else: ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Manage Products')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Products</strong></h2>
        </div>
         <div class="col-md-6 text-right">
            <a href="<?= base_url(ADMIN . '/products/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th width="5%" class="text-center">Sr#</th>
                <th width="20%">Title</th>
                <!-- <th width="10%">Image</th> -->
                <th width="10%">Furniture Category</th>
                <th width="10%">Sub category</th>
                <!-- <th width="10%">Jursidiction</th> -->
                <th width="30%">Description</th>
                <!-- <th width="5%">Years Of Experiece</th> -->
                <th width="10%">Price</th>
                <th>Status</th>
                <th width="15%">Created date</th>
                <th width="12%" class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($pro) > 0): $count = 0; ?>
                <?php foreach ($pro as $blog):  ?>                    
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <td><b><?= $blog->title ?></b><br/><?= $blog->positions_available ?></td>
                        <!-- <td class="text-center">
                            <div class="icoRound">
                                <img src = "<?= get_site_image_src('images/',$row->image, 'thumb_', true); ?>" height = "60">
                            </div>
                        </td> -->
                        <td><b><?=  get_furniture_cat($blog->furniture_cat_id) ?></b></td>
                        <td><b><?=  get_sub_cat($blog->sub_id) ?></b></td>
                       
                        <td><b><?= short_text($blog->description,100); ?></b></td>
                       
                        <td><b><?= $blog->price?></b></td>
                        <td><b><?=get_active_status($blog->status)?></b></td>
                       <td><b><?= format_date($blog->created_date,'M d Y h:i:s A'); ?></b></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= base_url(ADMIN); ?>/products/manage/<?= $blog->id; ?>">Edit</a></li>
                                    <?php if(access(10)):?>
                                        <li><a href="<?= base_url(ADMIN); ?>/products/delete/<?= $blog->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <?php endif?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>
<script src="<?= base_url('adminassets/js/jquery-3.4.1.js'); ?>"></script>
<script type="text/javascript">


    
jQuery(document).on('change', '#furniture_cat', function (event) {
            event.preventDefault();
           
            var sub_id =  jQuery('#furniture_cat').find(":selected").val();
            
      
      jQuery.ajax({
          url: base_url + 'admin/products/sub_cat',
          method: "POST",
          data: { 's_id': sub_id},
          success: function (data) {
            //console.log(data);
            event.preventDefault();
            jQuery(".sub_c").html(data);
          }
        });
        });











    $(document).on('click', '.add_recipe', function(e) {
        e.preventDefault();
          $ad = $(".recipe_clone:first").clone();
          $ad.find("input").val("");
          $ad.find("textarea").html("");
          var i=0;      
          $('.recipe_container').append($ad);
          $(".remove_recipe").each(function(){
            console.log($(this));
                $(this).click(function(e){
                    e.preventDefault(); 
                    $(this).parent().remove();
                });
          });
     });
    $('.add_new_cat').click(function(e){
        $(".category_new").toggle();
    });
    jQuery(document).on('change', '#imgInput', function () {

                var preview = jQuery(this).closest("#imgDiv").find("#newImg");
                console.log(preview);
                var oFReader = new FileReader();
                oFReader.readAsDataURL(jQuery(this)[0].files[0]);
                oFReader.addEventListener("load", function () {
                    preview.attr('src',oFReader.result);
                }, false);
    });
    $(document).on('click', '#add_category', function (event) {
            event.preventDefault();
            var cat_name=$("#cat_name").val();
            console.log("<?php echo base_url('admin/jobs/add_category'); ?>");
            $.ajax({
                    url: "<?php echo base_url('admin/jobs/add_category'); ?>",
                    data: {cat_name:cat_name },
                    type: "post",
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        if(response.status==true){
                            $(".site_categories").append('<li><input type="radio" name="categories" value="'+response.cat_id+'" checked="checked"> <span>'+cat_name+'</span></li>');
                            $('.category_new').hide();
                            $('#cat_name').val("");
                        }
                        
                      },
                      error: function(response)
                   {
                    console.log(response);
                   }
          });
        });
</script>