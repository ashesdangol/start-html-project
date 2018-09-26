  <!-- jquery cdn -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
  <!-- jQuery local fallback -->
  <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.js"><\/script>')</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
  <script>if(typeof(Popper) === 'undefined') {document.write('<script src="bs_js/popper.min.js"><\/script>')}</script>

  <!--bootstrap js cdn  -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Bootstrap JS local fallback -->
  <script>if(typeof($.fn.modal) === 'undefined') {document.write('<script src="bs_js/bootstrap.min.js"><\/script>')}</script>


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


</body>
</html>
