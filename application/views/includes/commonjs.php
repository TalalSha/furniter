<!-- Main Js -->

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        $("#datepicker").datepicker();
    });
</script>
<script type="text/javascript" src="<?=base_url()?>assets/js/smoothscroll.min.js"></script>
<!-- Gallery Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.blueimp-gallery.min.js"></script>
<!-- Isotope Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/isotops.js"></script>
<!-- toastr -->
<script type="text/javascript"        src="<?=base_url()?>assets/js/toastr.min.js"></script>
<script type="text/javascript">
    // for load
    $(window).load(function () {
        $('.iso_container').masonry({
            // options
            itemSelector: '.isotops_item'
        });
    });
</script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#owl-client').owlCarousel({
            autoplay: false,
            stopOnHover: true,
            nav: true,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots: false,
            loop: true,
            items: 1,
            smartSpeed: 2000,
            autoplayTimeout: 10000,
            autoplayHoverPause: true
        });
    });
</script>
<!-- Range Slider Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/lightslider.min.js">
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
    });
</script>

<script type="text/javascript"> 


$(document).on("click",".mailBar .cid",function(){
    $("#product").val($(this).data('cid'));
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val(null);
 
filter(id,price);


});
$(document).on("click",".mailBar .sid",function(){
    $("#cat").val($(this).data('sid'));
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val();
 
filter(id,price,sid);


});
$(document).on("slide","#slider-range",function(){
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val();
 if(id && sid){
    filter(id,price,sid);
    return;
 }
 if(!sid && id){
filter(id,price);
return;
 }

});


function filter(id,price,sid){

 
 $.ajax({
         url:base_url+ 'Catalog/pfilter',
         method: "POST",
         data: { 'id': id , 'price':price ,'sid':sid },
        
            
            dataType: "JSON",
      
         success: function (rs) {
        //   toastr.success("success","Message");
        //  console.log(rs);
            // alert(data);
     $("#fp").html(rs.output1);
    //          $("#tbl").html(rs.output2);
         }
     }); 

 
        }


</script>

<script type="text/javascript"> 


$(document).on("click",".mailBar .cid",function(){
    $("#product").val($(this).data('cid'));
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val(null);
 
filter(id,price);


});
$(document).on("click",".mailBar .sid",function(){
    $("#cat").val($(this).data('sid'));
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val();
 
filter(id,price,sid);


});
$(document).on("slide","#slider-range",function(){
    var price= document.getElementById("amount").value;
 var id = $("#product").val();
 var sid = $("#cat").val();
 if(id && sid){
    filter(id,price,sid);
    return;
 }
 if(!sid && id){
filter(id,price);
return;
 }

});


function filter(id,price,sid){

 
 $.ajax({
         url:base_url+ 'Catalog/pfilter',
         method: "POST",
         data: { 'id': id , 'price':price ,'sid':sid },
        
			
			dataType: "JSON",
      
         success: function (rs) {
        //   toastr.success("success","Message");
        //  console.log(rs);
			// alert(data);
     $("#fp").html(rs.output1);
    //          $("#tbl").html(rs.output2);
         }
     }); 

 
		}



</script>




<!-- Light Slider Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/lightslider.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //$("#lightSlider").lightSlider();
        $('#vertical').lightSlider({
            gallery: true,
            item: 1,
            auto: true,
            loop: true,
            speed: 2500,
            pause: 8000,
            slideMargin: 0,
            vertical: true,
            enableDrag: false,
            thumbMargin: 4,
            thumbItem: 4
        });
    });
    $(window).load(function () {
        $(".miniSlider").delay(300).fadeIn("slow");
    });
</script>
<!-- Image Zoom Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/imagezoom.js"></script>

<!-- Main Js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/main.js"></script>

