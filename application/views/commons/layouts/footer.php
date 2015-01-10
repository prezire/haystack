    <script src="<?php echo base_url('public/libs/foundation-5.4.7/js/foundation.min.js'); ?>"></script>
    <script>
        $(document).foundation();
        $(document).ready(function(){
          var h = new Haystack();
          h.init();
          h.baseUrl = '<?php echo base_url(); ?>';
          //
          new Pool().init();
          new Resume().init();
        });
    </script>
  </section><!-- end main -->  
  </body>
</html>