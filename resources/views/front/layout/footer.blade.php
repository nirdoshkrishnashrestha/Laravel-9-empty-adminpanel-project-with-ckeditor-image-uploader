	  
<section class="footer">
<div class="container"> 
<div class="row">
	<div class="col-lg-6 col-md-6">
	<div class="copy-right">&copy;  <?php echo date('Y') ?>, Sadasya Sewa | All Rights Reserved.</div>
	</div>
	<div class="col-lg-6 col-md-6">
		<div class="developerID"><a href="https://ittradersnepal.com.np/" target="_blank">Website Designed By: IT Traders Nepal</a></div>
	</div>
</div>
</div>	  
</section>

<!----------------------------------Page Scroll Start----------------------->
<a href="#" id="scroll" style="display: none;"><span></span></a>
<!----------------------------------Page Scroll End----------------------->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	<script src="{{ url('public/front/js/jquery.min.js') }}"></script>  
	<script src="{{ url('public/front/js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1
      });
    });
</script>


<script>
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
	
	
<script type="text/javascript">	
	$('.responsive').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 7,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
	 {
      breakpoint: 415,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
	  
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
});
	</script>


<script type="text/javascript" src="{{ url('public/front/js/vanilla-tilt.js') }}"></script>
<script type="text/javascript">
	
	VanillaTilt.init(document.querySelector(".vmo-col"), {
		max: 25,
		speed: 400,
		glare: true,
		"max-glare": 0.5,
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".vmo-col"));
		
</script>


<script type="text/javascript">
var a = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
	  
    $('.counter-value') .each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 5000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
			  
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});

</script>



<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="Yzsyteto"></script>
  </body>
</html>