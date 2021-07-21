<script src="{{ asset('assets/bootsrap/jquery.js') }}"></script>
<script src="{{ asset('assets/bootsrap/popper.js') }}"></script>
<script src="{{ asset('assets/bootsrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/lc_lightbox.lite.min.js') }}"></script>
 <script src="{{ asset('assets/js/alloy_finger.min.js') }}"></script>



    <script>
      var wow = new WOW(
      {
          boxClass:'wow',
          animateClass:'animated',
          offset:0,
          mobile:true,
          live:true,
          callback:function(box){

          },
          scrolcontainer:null,
          resetAnimate:true,
      }
      );
      wow.init();
      </script>
      <script>
          var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
