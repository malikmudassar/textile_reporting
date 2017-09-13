 <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.0</small>
          <small class="copyright">2017 &copy; PM_ERP by <a href="#"> Technologicx</a></small>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url(). 'assets/js/vendor.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/elephant.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/application.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/demo.min.js'; ?>"></script>
    <script src="<?php echo base_url(). 'assets/js/toastr.min.js'; ?>"></script>


     <script>
         window.setTimeout(function() {
             $(".alert").fadeTo(500, 0).slideUp(500, function(){
                 $(this).remove();
             });
         }, 3000);
     </script>

 <script src="<?php echo base_url() ?>assets/js/jquery.bxslider.js" type="text/javascript"></script>


 <script type="text/javascript">
     $(function() {
         $('#nt-example1').bxSlider({
             mode: 'vertical',
             startAuto: true,
             auto: true,
             autoControlsCombine: false,
             adaptiveHeight: true,
             responsive: true,
             pager: false,
             controls: false,
             minSlides: 5,
             moveSlides: 1,
             infiniteLoop: true
         });
     });
 </script>
 <script type="text/javascript">
     $(function() {
         $('#nt-example2').bxSlider({
             mode: 'vertical',
             startAuto: true,
             auto: true,
             autoControlsCombine: false,
             adaptiveHeight: true,
             responsive: true,
             pager: false,
             controls: false,
             minSlides: 5,
             moveSlides: 1,
             infiniteLoop: true
         });
     });
 </script>
 <script type="text/javascript">
     $(function() {
         $('#nt-example3').bxSlider({
             mode: 'vertical',
             startAuto: true,
             auto: true,
             autoControlsCombine: false,
             adaptiveHeight: true,
             adaptiveHeightSpeed: 500,
             responsive: true,
             pager: false,
             controls: false,
             minSlides: 5,
             moveSlides: 1,
             infiniteLoop: true
         });
     });
 </script>
 <script type="text/javascript">
     $(function() {
         $('#nt-example4').bxSlider({
             mode: 'vertical',
             startAuto: true,
             auto: true,
             autoControlsCombine: false,
             adaptiveHeight: true,
             adaptiveHeightSpeed: 500,
             responsive: true,
             pager: false,
             controls: false,
             minSlides: 5,
             moveSlides: 1,
             infiniteLoop: true
         });
     });
 </script>


  </body>


</html>