<?php
$this->load->view('template/head');
?>

<!--tambahkan custom css disini-->
<!-- iCheck -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/flat/blue.css') ?>" rel="stylesheet" type="text/css" />
<!-- Morris chart -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/morris/morris.css') ?>" rel="stylesheet" type="text/css" />
<!-- jvectormap -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jvectormap/jquery-jvectormap-1.2.2.css') ?>" rel="stylesheet" type="text/css" />
<!-- Date Picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') ?>" rel="stylesheet" type="text/css" />
<!-- Daterange picker -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/daterangepicker/daterangepicker-bs3.css') ?>" rel="stylesheet" type="text/css" />
<!-- bootstrap wysihtml5 - text editor -->
<link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css" />

<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Advanced Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">NAMA PEGAWAI</h3>
                </div>
                <div class="box-body">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Date masks:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- Date mm/dd/yyyy -->
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>US phone mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>Intl US phone mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- IP mask -->
                  <div class="form-group">
                    <label>IP mask:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-laptop"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Color & Time Picker</h3>
                </div>
                <div class="box-body">
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Color picker:</label>
                    <input type="text" class="form-control my-colorpicker1"/>
                  </div><!-- /.form group -->

                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Color picker with addon:</label>
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control"/>
                      <div class="input-group-addon">
                        <i></i>
                      </div>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- time Picker -->
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time picker:</label>
                      <div class="input-group">
                        <input type="text" class="form-control timepicker"/>
                        <div class="input-group-addon">
                          <i class="fa fa-clock-o"></i>
                        </div>
                      </div><!-- /.input group -->
                    </div><!-- /.form group -->
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.row -->

          </div>
        </section><!-- /.content -->



<?php
$this->load->view('template/js');
?>

<!--tambahkan custom js disini-->
<!-- jQuery UI 1.11.2 -->
<script src="<?php echo base_url('assets/js/jquery-ui.min.js') ?>" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- InputMask -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.date.extensions.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/input-mask/jquery.inputmask.extensions.js')?>" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/pages/dashboard.js') ?>" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/demo.js') ?>" type="text/javascript"></script>
<!-- Page script -->
<script type="text/javascript">
  $(function () {
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                'Last 7 Days': [moment().subtract('days', 6), moment()],
                'Last 30 Days': [moment().subtract('days', 29), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
              },
              startDate: moment().subtract('days', 29),
              endDate: moment()
            },
    function (start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<?php
$this->load->view('template/foot');
?>