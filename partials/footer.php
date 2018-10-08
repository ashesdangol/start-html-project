  <!-- jquery cdn -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- jQuery local fallback -->
  <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.js"><\/script>')</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <script>if(typeof(Popper) === 'undefined' || typeof($.fn.modal) === 'undefined') {document.write('<script src="bs_js/bootstrap.bundle.min.js"><\/script>')}</script>


  <!--If bootstrap cdn is unavialble use local boostrap css -->
  <div id="bootstrapCssTest" class="d-none"></div>
  <script>
    $(function() {
      if ($('#bootstrapCssTest').is(':visible')) {
        $("head").prepend('<link rel="stylesheet" href="bs_css/bootstrap-reboot.min.css">');
        $("head").prepend('<link rel="stylesheet" href="bs_css/bootstrap.min.css">');
      }
    });
  </script>
  <script src="plugins/threesixty.js"></script>
  <script src="plugins/drawsvg.js"></script>
  <script src="plugins/tilt.jquery.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>
