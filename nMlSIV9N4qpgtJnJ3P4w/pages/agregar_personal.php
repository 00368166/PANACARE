<?php
include_once "../includes/navbar.php";
include "../sesion.php";
if(isset($_REQUEST['submit'])){
if (!empty($_POST)) {
  if (empty($_POST['nombre']) || empty($_POST['telefono']) || empty($_POST['disponibilidad']) || empty($_POST['descrip'])) {
    $alert = '<div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5>¡Alerta!</h5>
      Todos los campos son necesarios.
    </div>';
  }
  else {
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $fecha= $_POST['nacimiento'];
      $fecha = str_replace('/', '-', $fecha);
      $nacimiento = date("Y-m-d", strtotime($fecha) );
      $disponibilidad = $_POST['disponibilidad'];
      $descrip = $_POST['descrip'];
      if(!empty($_FILES['foto'])){
        $tipoArchivo=$_FILES['foto']['type'];
        $nombreArchivo= $_FILES['foto']['name'];
        $guardado=$_FILES['foto']['tmp_name'];
        $directorio ="../../fotos/enfermeras/";
 $ruta = "../../fotos/enfermeras/".$nombreArchivo;
 if(!file_exists($directorio)){
	mkdir($directorio ,0777,true);
	if(file_exists($directorio)){

		if(move_uploaded_file($guardado, "../../fotos/enfermeras/".$nombreArchivo)){
			echo "Archivo guardado con exito";
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
		if(move_uploaded_file($guardado, "../../fotos/enfermeras/".$nombreArchivo)){
		echo "Archivo guardado con xxito";

	}else{
		echo "Este archivo ya existe en el directorio";
	}

	var_dump($ruta);

}
      }
      else{
        $nombreArchivo="";
        $tipoArchivo="";
      }


      $result = 0;
          $query = mysqli_query($conexion, "SELECT * FROM enfermeras where enfermeras_nombre = '$nombre'");
          $result = mysqli_fetch_array($query);
      if ($result > 0) {
        $alert = '<div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h5>¡Alerta!</h5>
          Ya tenemos una enfermera registrada con este nombre.
        </div>';
      } else {
          $query_insert = mysqli_query($conexion, "INSERT INTO enfermeras(enfermeras_nombre,enfermeras_telefono,enfermeras_disponibilidad,enfermeras_nacimiento,enfermeras_general,nombre_imagen,tipo_imagen) values ('$nombre', '$telefono', '$disponibilidad', '$nacimiento', '$descrip','$nombreArchivo','$tipoArchivo')");
          if ($query_insert) {
            $alert = '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
Enfermera registrada
              </div>';
          } else {
            $alert = '<div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5>¡Alerta!</h5>
              ERROR.
            </div>';
          }
      }
  }
mysqli_close($conexion);
}
else{
  $alert = '<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5>Recordatorio</h5>
    Todos los campos son necesarios ampos necesarios.
  </div>';
}
}
?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Agregar personal</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <form method="post" enctype="multipart/form-data">

      <?php echo isset($alert) ? $alert : ""; ?>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresar nombre completo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Telefono</label>
              <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Ej: 9511876322">
            </div>
            <div class="form-group">
              <label>Fecha de nacimiento</label>

              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" name="nacimiento" id="nacimiento"  class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Disponibilidad</label>
              <input type="text" class="form-control" name="disponibilidad" id="disponibilidad" placeholder="Dias y horarios disponibles para laborar">
            </div>


            <div class="form-group">
              <label for="exampleInputPassword1">Descripción</label>
              <input type="text" class="form-control" name="descrip" id="descrip" placeholder="Breve Descripcion de la persona">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Foto</label>
              <div class="form-group">
                <input  class="form-control-file" name="foto" id="foto" type="file"/>
              </div>
            </div>

          </div>

        <div class="form-group">
        </div>
                    <div class="card-footer">
                      <button type="submit"  name="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>

        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code End
</script>

<?php include_once "../includes/footer.php"; ?>
