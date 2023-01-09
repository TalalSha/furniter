<!DOCTYPE html >
 <html>



    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?php
        $page_title = empty($site_content['page_title']) ? $page_title." - ".$site_settings->site_name : $site_content['page_title'] . ' - ' . $site_settings->site_name;
        $meta_description = empty($site_content['meta_description']) ? $meta_description : $site_content['meta_description'];
        $meta_title = empty($site_content['meta_title']) ? $meta_title : $site_content['meta_title'];
        $meta_keywords = empty($site_content['meta_keywords']) ? $meta_keywords : $site_content['meta_keywords'];
        $meta_image = empty($site_content['meta_image']) ? SITE_IMAGES . '/images/' . $site_settings->site_thumb . '?v-' . $site_settings->site_version : $site_content['meta_image'];
        ?>
        <meta name="title" content="<?= $page_title ?>">
        <meta name="description" content="<?= $meta_description ?>">
        <meta name="keywords" content="<?= $meta_keywords ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= currentURL() ?>">
        <meta property="og:title" content="<?= $meta_title ?>">
        <meta property="og:description" content="<?= $meta_description ?>">
        <meta property="og:image" content="<?= $meta_image ?>">
        <meta property="twitter:card" content="thumbnail">
        <meta property="twitter:url" content="<?= currentURL() ?>">
        <meta property="twitter:title" content="<?= $meta_title ?>">
        <meta property="twitter:description" content="<?= $meta_description ?>">
        <meta property="twitter:image" content="<?= $meta_image ?>">


<!-- Css files -->
<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/mycss.css">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
<!-- Font-Awesome Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/fonticon.min.css">
<!-- Gallery Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/blueimp-gallery.min.css">
<!-- Isotops Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/isotops.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
<!-- Range Slider Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/range-slider.css">
<!-- Light Slider Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/lightslider.css">
<!-- Date Picker Css -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/datepicker.css">


<!-- toastr -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/toastr.min.css">


<!-- Favicon -->


        <title><?= $page_title  ?></title>
        <link type="image/png" rel="icon" href="<?= SITE_IMAGES . '/images/' . $site_settings->site_icon . '?v-' . $site_settings->site_version ?>">
        <!-- JS Files -->
        <script type="text/javascript">
            var base_url = "<?= base_url() ?>";
            let page_name="<?=$this->uri->segment(1)?>";

         
      </script>
        
        </script>
        <body  >
          <?php
              if($page_404!=true){
                $this->load->view('includes/header');
              }		    
          ?>
          <?php echo showMsg(); ?>
              <?php $this->load->view($pageView); ?>
          <?php
          if($page_404!=true)
            $this->load->view('includes/footer');
          ?>

<!-- starting ajaxx part===================================================== -->

<script type="text/javascript">



  function product(id){
   
 
   $("#product").val(id);
  }
  // cat_product_filter();
  

function cat(id){
  
   $("#cat").val(id);
  cat_product_filter();
}


function cat_product_filter(){
    
    var product_id = $("#product").val();
    var cat_id = $("#cat").val();
  // alert(brand_id);
  $.ajax({
      url: base_url + 'product_filter',
      method: "POST",
      data: { 'b_id': product_id, 'c_id': cat_id },
      success: function (data) {
        //console.log(data);
        $(".itemsf").html(data);
      }
    });
  }
   
	</script>





  <script type="text/javascript">
    $(document).on("click","#dl .closeBtn",function(e){
      e.preventDefault();
		var id = $(this).attr('id');
		 
		var rowid =$(".row_id"+id).val();
    
		$.ajax({
         url: base_url+'delete_item',
         method: "POST",
         data: { 'id': rowid },
        
        
			
			dataType: "JSON",
         success: function (rs) {
          //  toastr.success(rs.msg,"Message");
             console.log(rs);
             $("#newit").html(rs.output1);
             $("#tbl").html(rs.output2);
         }
     }); 
	});
	</script>
  <script type="text/javascript">
    $(document).on("click","#newitm span",function(){
		var id = $(this).attr('id');
		 
		var rowid =$(".row_id"+id).val();
    
		$.ajax({
         url: base_url+'delete',
         method: "POST",
         data: { 'id': rowid },
         dataType: "JSON",
         success: function (rs) {
          //  toastr.success(rs.msg,"Message");
             $("#new").html(rs.output1);
             $("#tbl1").html(rs.output2);
         }
     }); 
	});
	</script>
<script type="text/javascript">
		$(document).on("click",".overlay .cart",function(){
			var id = $(this).data('id');
			var name = $(this).data('name');
			var price = $(this).data('price');
      var image = $(this).data('image');
      var des = $(this).data('des');
     
			$.ajax({
         url:base_url+ 'add_cart',
         method: "POST",
         data: { 'id': id, 'name':name,'price':price , 'image':image, 'des':des  },
        
			
			dataType: "JSON",
      
         success: function (rs) {
          //  toastr.success(rs.msg,"Message");
      //        console.log(data);
			// alert(data);
      $("#newit").html(rs.output1);
             $("#tbl").html(rs.output2);
         }
     }); 

 
		});

  
	</script>
         
        </body>
</html>
