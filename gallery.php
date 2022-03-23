<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Best South Indian Wedding and Event Planners, Consultants and Decoraters - SKS Wedding and Event Planner</title>
<link rel="canonical" href="https://www.sksweddingplanner.com/gallery" />
<meta name="description" content="SKS Wedding and Event Planners, the best wedding planners in Chennai, South India provides complete wedding planning A to Z services, including assistance with wedding budgets, decorations, and venues, as well as wedding photography and videography, wedding catering, wedding invitations, wedding bridal beautician services, wedding health and well-being packages, and entertainment." />

<meta property="og:title" content="Best South Indian Wedding and Event Planners, Consultants and Decoraters - SKS Wedding and Event Planner">
<meta property="og:url" content="https://www.sksweddingplanner.com/gallery">
<meta property="og:image" content="https://www.sksweddingplanner.com/images/logo-img.png">
<meta property="og:description" content="SKS Wedding and Event Planners, the best wedding planners in Chennai, South India provides complete wedding planning A to Z services, including assistance with wedding budgets, decorations, and venues, as well as wedding photography and videography, wedding catering, wedding invitations, wedding bridal beautician services, wedding health and well-being packages, and entertainment.">
<meta property="og:type" content="website">

<meta name="twitter:card" content="summary">
<meta property="twitter:title" content="Best South Indian Wedding and Event Planners, Consultants and Decoraters - SKS Wedding and Event Planner">
<meta name="twitter:image" content="https://www.sksweddingplanner.com/images/logo-img.png">
<meta property="twitter:description" content="SKS Wedding and Event Planners, the best wedding planners in Chennai, South India provides complete wedding planning A to Z services, including assistance with wedding budgets, decorations, and venues, as well as wedding photography and videography, wedding catering, wedding invitations, wedding bridal beautician services, wedding health and well-being packages, and entertainment.">


<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/megamenu.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>

<!-- REVOLUTION LAYERS STYLES -->
<link rel='stylesheet' id='rs-plugin-settings-css' href="revolution/css/rs6.css"> 
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css" />
<link rel='stylesheet' type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css'>
<?php include'head_script.php'?>

</head>
<body>

<!--page start-->
    <div class="page">
        <?php $page='gallery'; include'header.php'?>

        <!--page-title-->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-gal_items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Gallery</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>                    
        </div>
        <!--page-title end-->


        <!--site-main start-->
        <div class="site-main">


              <section class="ttm-row clearfix">
            <div class="container">
                <!-- row -->
                <div class="row mb_15">
                    <div class="col-lg-12">
                    <div class="section-title clearfix">
                       <div class="title-header">
                       <h1 class=text-center>SKS Wedding and Event Planner</h1>
                        </div>
</div>
                    <div class="gal_container">
 <?php 
include 'config.php';
$sql = "select id, document_name, created_by, status, created_on, updated_on  from  articles;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

 $data = $result-> fetch_all(MYSQLI_ASSOC);
 
$i = 0;
  foreach($data as $row) {
    $i++;
?> 
  <div class="gal_item"><a href="admin/upload/<?php echo $row['document_name']; ?>" data-fancybox="gallery"><img src="admin/upload/<?php echo $row['document_name']; ?>" alt="<?php echo $row['document_name']; ?>"></a></div>
<?php } }?>
  
</div>
                    </div>
                </div>
            </div>
        </section>

        </div><!-- site-main end -->
    <?php include 'footer.php';?>

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery-isotope.js"></script>
    <script src="js/price_range_script.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js'></script>
    <!-- Javascript end-->


</body>

</html>
