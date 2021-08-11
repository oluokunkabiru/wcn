 <!--   Core JS Files   -->
 <script src="{{ asset('assets/bootsrap/jquery.js') }}"></script>
<script src="{{ asset('assets/bootsrap/popper.js') }}"></script>
<script src="{{ asset('assets/bootsrap/bootstrap.min.js') }}"></script>
 <script src="{{ asset('assets/jquery-ui-1.11.4/jquery-ui.min.js') }}"></script>
 <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
 <script>
   var win = navigator.platform.indexOf('Win') > -1;
   if (win && document.querySelector('#sidenav-scrollbar')) {
     var options = {
       damping: '0.5'
     }
     Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
   }
 </script>
 <!-- Github buttons -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
 <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.2') }}"></script>
 <script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
 <script src="{{ asset('assets/datatables/datatables.min.js') }}"></script>
