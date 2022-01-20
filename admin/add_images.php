<?php
session_start();
error_reporting(0);

if (!$_SESSION["user"]) {
    header('location:index.php');
} 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="icon" href="assets/images/favicon.ico">
		
		<title>VTL</title>
		
		<!-- Main Styles -->
		<link rel="stylesheet" href="assets/styles/style.min.css">
		<!-- Material Design Icon -->
		<link rel="stylesheet" href="assets/fonts/material-design/css/materialdesignicons.css">
		<!-- mCustomScrollbar -->
		<link rel="stylesheet" href="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">
		<!-- Waves Effect -->
		<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">
		<!-- Sweet Alert -->
		<link rel="stylesheet" href="assets/plugin/sweet-alert/sweetalert.css">
		<!-- Table Responsive -->
		<link rel="stylesheet" href="assets/plugin/RWD-table-pattern/css/rwd-table.min.css">
		<link rel="stylesheet" href="assets/fonts/fontello/fontello.css">
	</head>
	<body>
		<?php
		include 'helpers/config.php';
		include 'helpers/top_header.php';
		include 'helpers/side_header.php';
		?>
		<div id="wrapper">
			<div class="main-content">
				<div class="row small-spacing">
					<div class="box-content card white">
						<div class="box-title row">
							<div class='col-md-4'><h4>Add Image</h4></div>
							<div class='col-md-6'>
								<h6>Images -> Add Images</h6>
							</div>
							<div class='col-md-2'>
								<a href='list_images.php'><button class="btn btn-warning">List Images</button></a>
							</div>
						</div>
						<div class="card-content">
							<form id="form" method="POST" action="action/action_create_image.php" enctype="multipart/form-data">
								<div class="row"><span id="error"></span></div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Upload Gallery Image</label>
											<input type="file" class="form-control" name="file" value=""/>

										</div>
									</div>
								</div>
								
								<p class="text-center"><button  type="submit" class="btn btn-primary btn-sm waves-effect waves-light" name="upload">Upload</button></p>
							</form>
						</div>
						<?php include 'helpers/footer.php'; ?>
					</div>
				</div>
			</div>
		</div>
		
		<script src="assets/scripts/jquery.min.js"></script>
		<script src="assets/scripts/modernizr.min.js"></script>
		<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="assets/plugin/nprogress/nprogress.js"></script>
		<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
		<script src="assets/plugin/waves/waves.min.js"></script>
		<!-- Full Screen Plugin -->
		<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>
		<!-- Flex Datalist -->
		<script src="assets/plugin/flexdatalist/jquery.flexdatalist.min.js"></script>
		<!-- Popover -->
		<script src="assets/plugin/popover/jquery.popSelect.min.js"></script>
		<!-- Select2 -->
		<script src="assets/plugin/select2/js/select2.min.js"></script>
		<!-- Multi Select -->
		<script src="assets/plugin/multiselect/multiselect.min.js"></script>
		<!-- Touch Spin -->
		<script src="assets/plugin/touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<!-- Timepicker -->
		<script src="assets/plugin/timepicker/bootstrap-timepicker.min.js"></script>
		<!-- Colorpicker -->
		<script src="assets/plugin/colorpicker/js/bootstrap-colorpicker.min.js"></script>
		<!-- Datepicker -->
		<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
		<!-- Moment -->
		<script src="assets/plugin/moment/moment.js"></script>
		<!-- DateRangepicker -->
		<script src="assets/plugin/daterangepicker/daterangepicker.js"></script>
		<!-- Maxlength -->
		<script src="assets/plugin/maxlength/bootstrap-maxlength.min.js"></script>
		<!-- Demo Scripts -->
		<script src="assets/scripts/form.demo.min.js"></script>
		<script src="assets/scripts/main.min.js"></script>
		<script type="text/javascript">

$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
    url: "action/action_create_image.php",
   type: "POST",
   data:  new FormData(this),
   contentType: false,
         cache: false,
   processData:false,
   beforeSend : function()
   {
    //$("#preview").fadeOut();
    $("#err").fadeOut();
   },
   success: function(data)
    alert (data);
      {
        // alert (data);
    if(data=='success')
    {
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
      $("#form")[0].reset(); 
    }
    else
    {
      $('#error').html("Failure some connection issues");
    }
      },
     error: function(e) 
      {
    $("#err").html(e).fadeIn();
      }          
    });
 }));
});
</script>
	</body>
</html>