<?php
if (!isset($_SESSION)) {
    session_start();
} 

$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];

$today = date("Ymdhis");
move_uploaded_file($file_tmp,"../upload/".time().$file_name);

$file = $_FILES['file']['name'];
$doc_name = addslashes($_FILES['file']['name']);
$document_name = addslashes(time().$_FILES['file']['name']);
        
$created_by=$_SESSION["user"];
date_default_timezone_set("Asia/Kolkata");
$created_on= date("d/m/yy H:i:s");

require_once '../process/dao.php';
       insertArticles($document_name,$created_by,$created_on);
?>
<script type="text/javascript">
window.location.href = '../list_images.php';
</script>