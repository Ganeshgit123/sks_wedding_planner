<?php
session_start();
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
<meta name="description" content="">
<meta name="author" content="">
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

<!-- /.col-lg-6 col-xs-12 -->		
<!-- /.col-xs-12 -->
<div class="box-content card white">
<div class="box-title row">
    <div class='col-md-4'><h4>Update User</h4></div>
    <div class='col-md-6'></div>
    <div class='col-md-2'> 
        <a href='list_user.php'><button class="btn btn-warning">User List</button></a>
    </div>
</div>
 
  <?php              
      require_once 'process/dao.php';    
        $sid=$_GET["id"];
        $listus= listArticlesById($sid);
         ?>
         <?php $count=0;
            foreach ($listus as $cval) { ?>

<div class="card-content">
<form id="form" action="action/action_update_image.php" method="post" enctype="multipart/form-data">
  <div class="row"><span id="error"></span></div>
<div class="row">
  <input type="hidden" required class="form-control" name="id" 
       id="id" placeholder="sample Name" value="<?php echo $sid; ?>">

		<div class="col-md-6">
<div class="form-group">
<label for="exampleInputEmail1">Article Image<span class="required">*</span></label>
<input type="file" class="form-control" name="file" id="file"/>
<input type="hidden" name="old_image_name" value="<?php echo $cval['document_name']?>">
<image src="<?php echo 'upload/'.$cval['document_name']; ?>" class="images" style="width:50px;height: 50px;" />
</div>

</div>
</div>
<?php }?>
<p class="text-center"><input type="submit" class="btn btn-primary btn-sm waves-effect waves-light" ></input></p>
</div>
</form>

<!-- /.row small-spacing -->    
<?php include 'helpers/footer.php'; ?>
</div>
<!-- /.main-content -->
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
<script src="assets/color-switcher/color-switcher.min.js"></script>

<script src="assets/scripts/export.js"></script>

<script type="text/javascript">

$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
    url: "action/action_update_image.php",
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
        // alert("successfully added");
    if(data=='success')
    {
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
      $("#form")[0].reset(); 
     // invalid file format.
     // $("#err").html("Invalid File !").fadeIn();
    }
    else
    {
      $('#error').html("Failure some connection issues");
     // view uploaded file.
     // $("#preview").html(data).fadeIn();
     // 
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