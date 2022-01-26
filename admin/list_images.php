<?php
session_start();
if (!$_SESSION["user"]) {
    header('location:index.php');
	exit;
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

<title>SKS</title>

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
<div class="col-xs-12">
     <div class="box-content card white">
<div class="box-title row">
    <div class='col-md-4'><h4>List Images</h4></div>
    <div class='col-md-6'>
    <h6>Images -> List Images</h6></div>
    <div class='col-md-2'> 
        <a href='add_images.php'><button class="btn btn-warning">Add Image</button></a>
    </div>
</div>
<div class="box-content">
 <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
      <tr>
<th>No</th>
<th>Image</th>
<th>Status</th>
<th>Action</th>
</tr>
      
</thead>
<tbody>
 
<tr>
 <?php 
include 'config.php';
$sql = "select id, document_name, created_by, status, created_on, updated_on  from  articles order by id desc;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 $data = $result-> fetch_all(MYSQLI_ASSOC);
 
$i = 0;
  foreach($data as $row) {
    $i++;
?> 
<td><?php echo $i ?></td>

<td><image src="<?php echo 'upload/'.$row['document_name']; ?>" class="images" style="width:100px;height: 100px;" /></td>

<td><?php if($row['status']=='A'){
echo 'Active';
}else{
echo 'Inactive';
}?></td>

<td>
  <?php if($row['status']=='A'){ ?>
  <a href="action/action_update_image_status.php?id=<?php echo $row['id']?>&status=<?php  echo 'I'?>">
    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light">Inactive</button></a>
    <?php }else{?>
      <a href="action/action_update_image_status.php?id=<?php  echo $row['id']?>&status=<?php  echo 'A'?>">
        <button type="button" class="btn btn-success btn-xs waves-effect waves-light">Active</button>
      </a><?php } ?>
      <a href="update_images.php?id=<?php echo $row['id']?>">&nbsp;&nbsp;<button type="button" class="btn btn-warning btn-circle btn-xs waves-effect waves-light"><i class="ico fa fa-pencil"></i></button></a></td>
</tr>     
<?php }  } ?>

</tbody>
    
    </table>
</div>
<!-- /.box-content -->
</div>
<!-- /.col-lg-6 col-xs-12 -->
</div>
</div>


<!-- /.row small-spacing -->    
<?php include 'helpers/footer.php'; ?>
</div>
<!-- /.main-content -->
</div>
</div><!--/#wrapper -->

================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/modernizr.min.js"></script>
<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugin/nprogress/nprogress.js"></script>
<script src="assets/plugin/sweet-alert/sweetalert.min.js"></script>
<script src="assets/plugin/waves/waves.min.js"></script>
<!-- Full Screen Plugin -->
<script src="assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

<!-- Responsive Table -->
        <script src="assets/plugin/RWD-table-pattern/js/rwd-table.min.js"></script>

<script src="assets/scripts/rwd.demo.min.js"></script>

<script src="assets/scripts/main.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
 

$(function($) {
$('#example').DataTable();

$('#example2').DataTable( {
"scrollY":        "300px",
"scrollCollapse": true,
"paging":         false
} );

$('#example3').DataTable();
});
</script>
</body>
</html>