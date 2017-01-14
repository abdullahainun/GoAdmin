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
           Formulir Pendaftaran Laundry
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
            <div class="col-md-6">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Identitas</h3>
                </div>
                <div class="box-body">
                  <!-- NAMA depan-->
                  <div class="form-group">
                    <label>Nama Depan:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask="'alias': 'ainun abdullah'"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                 <!-- NAMA depan-->
                 <div class="form-group">
                   <label>Nama belakang:</label>
                   <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-user"></i>
                     </div>
                     <input type="text" class="form-control" data-inputmask="'alias': 'ainun abdullah'"/>
                   </div><!-- /.input group -->
                 </div><!-- /.form group -->

                  <!-- phone mask -->
                  <div class="form-group">
                    <label>No Telp:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                      </div>
                      <input type="text" class="form-control" data-inputmask='"mask": "(62) 999-9999"' data-mask/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                  <!-- Aalamat-->
                  <div class="form-group">
                    <label>Alamat:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-map-marker"></i>
                      </div>
                      <textarea type="text" class="form-control"></textarea>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->

           </div><!-- /.row -->

            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Barang Laundry</h3>
                </div>
                <div class="box-body">
                  <!--Paket Laundry-->
                  <div class="form-group">
                    <label>Nama Paket:</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-list"></i>
                      </div>
                      <input type="text" class="form-control"/>
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->
                 <!-- kg-->
                 <div class="form-group">
                   <label>Jumlah(KG):</label>
                   <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-rebel"></i>
                     </div>
                     <input type="number" class="form-control"/>
                   </div><!-- /.input group -->
                 </div><!-- /.form group -->

                 <!-- kg-->
                 <div class="form-group">
                   <label>Waktu Selesai:</label>
                   <div class="input-group">
                     <div class="input-group-addon">
                       <i class="fa fa-calendar-o fa-calendar-check-o"></i>
                     </div>
                     <input type="date" class="form-control"/>
                   </div><!-- /.input group -->
                 </div><!-- /.form group -->

                
                </div><!-- /.box-body -->
              </div><!-- /.box -->


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