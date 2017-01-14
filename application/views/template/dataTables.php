
   <!-- DATA TABES SCRIPT -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/jquery.dataTables.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datatables/dataTables.bootstrap.js')?>" type="text/javascript"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js')?>" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>