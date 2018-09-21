
      </div>
    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <!-- <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div> -->
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
      var gdate  = "<?php echo date("Y-m-d")?>";
    </script>

    <?php //  if($this->uri->segment(1) == "" || $this->uri->segment(1) == "admin" || ($this->uri->segment(1) == "admin" && $this->uri->segment(2) == "index" )) { ?>
   <?php if($this->uri->segment(2) != "computers") { ?> 
      <script src="<?php echo base_url('vendors/comet/prototype.js?v='.VERSION); ?>"></script>
    <?php } ?>
    <script src="<?php echo base_url('vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/nprogress/nprogress.min.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pnotify/dist/pnotify.buttons.js'); ?>"></script>

    <script src="<?php echo base_url('vendors/easyautocomplete/jquery.easy-autocomplete.min.js'); ?>"></script>

    <?php if($this->uri->segment(1) == "encode" || $this->uri->segment(1) == "admin") { ?>
    <script src="<?php echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <?php } ?>

    <script src="<?php echo base_url('vendors/jquery.tagsinput/dist/jquery.tagsinput-revisited.min.js'); ?>"></script>

    <?php //if($this->uri->segment(1) == "inventory" || $this->uri->segment(1) == "report" || $this->uri->segment(1) == "admin" || $this->uri->segment(1) == "maintenance") { ?>
    <!-- <script src="<?php //echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script> -->
    <script src="<?php echo base_url('vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'); ?>"></script>
    <?php //} ?>

    <!-- dataTables -->

    <script src="<?php echo base_url('vendors/pdatatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/buttons.print.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/jszip.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/pdatatables/buttons.html5.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/formValidation.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendors/formvalidation/framework/bootstrap.min.js'); ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('build/js/custom.js?v='.VERSION); ?>"></script>
    <script src="<?php echo base_url('build/js/globalfunction.js?v='.VERSION); ?>"></script>
    <!-- <script src="<?php // echo base_url('build/js/services.js?v='.VERSION); ?>"></script> -->

    <?php if($this->uri->segment(1) == "admin" && $this->uri->segment(2) == "encode") { ?>
      <script src="<?php echo base_url('build/js/admin.js?v='.VERSION); ?>"></script>
    <?php } ?>


    <?php if($this->uri->segment(2) == "services") { ?>
      <script src="<?php echo base_url('build/js/services.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(2) == "computers") { ?>
      <script src="<?php echo base_url('build/js/computers.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(2) == "computerslist") { ?>
      <script src="<?php echo base_url('build/js/computerlist.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(2) == "index" || $this->uri->segment(2) == ""  || ($this->uri->segment(1) == "admin" && $this->uri->segment(2) == "index")) { ?>
      <script src="<?php echo base_url('build/js/monitoring.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(2) == "projects") { ?>
      <script src="<?php echo base_url('build/js/projects.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <?php if($this->uri->segment(2) == "personnel") { ?>
      <script src="<?php echo base_url('build/js/personnel.js?v='.VERSION); ?>"></script>
    <?php } ?>

    <script>
        $('.time').inputmask("hh:mm", {
        mask: "h:s t\\m",
        placeholder: "hh:mm xm - hh:mm xm",
        alias: "datetime",
        hourFormat: "12"
        }
      );
    </script>

        <?php if($this->uri->segment(1) == "" || $this->uri->segment(1) == "admin" || ($this->uri->segment(1) == "admin" && $this->uri->segment(2) == "index" )) { ?>
          <script src="<?php echo base_url('build/js/cometServices_adminside.js?v='.VERSION); ?>"></script>
          <script src="<?php echo base_url('build/js/cometServices.js?v='.VERSION); ?>"></script>
          <script src="<?php echo base_url('build/js/cometSdsProjects.js?v='.VERSION); ?>"></script>
          <script src="<?php echo base_url('build/js/cometPersonnelList.js?v='.VERSION); ?>"></script>
        <?php } ?>
  </body>
</html>
