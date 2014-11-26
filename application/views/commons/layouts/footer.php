    <script src="<?php echo base_url('public/libs/foundation-5.4.7/js/foundation.min.js'); ?>"></script>
    <script>
        $(function() {
            $('input.datepicker').datepicker();
            $('input.datepicker').datepicker
            (
              'option', 
              'dateFormat', 
              'yy-mm-dd'
            );

        });
        $(document).foundation();
        $(document).ready(function(){
          var h = new Haystack();
          h.init();
          h.baseUrl = '<?php echo base_url(); ?>';
        });
    </script>
  </section><!-- end main -->  
  </body>
</html>