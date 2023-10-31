<?php
$home ="active";
include_once("admin/includes/con_db.php");
try{
    $sql="SELECT * FROM `news` WHERE `active` =1 ORDER BY `publish_date` DESC LIMIT 4";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo "Connection failed" .$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BizNews - Free News Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <?php include_once("includes/topbar.php"); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include_once("includes/navbar.php"); ?>
    <!-- Navbar End -->


    <!-- Main News Slider Start -->
    <?php include_once("includes/mainslider.php"); ?>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <?php include_once("includes/breakingnews.php"); ?>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <?php include_once("includes/featurednews.php"); ?>
    <!-- Featured News Slider End -->


 <!-- News With Sidebar Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

        <!-- Start Latest News bar  -->
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                                </div>
                            </div>
        <!-- End Latest News bar  -->

        <!-- Start 1st section four Latest News in four col -->
        <?php include_once("includes/1stsection.php"); ?>
        <!-- End 1st section Four Latest News in four col -->

            <!-- Start 2nd section four  Latest News in small four col -->
            <?php include_once("includes/2ndsection.php"); ?>
        <!-- End 2nd section four  Latest News in small four col -->

        <!-- Start 2nd Image -->
            <div class="col-lg-12 mb-3">
                <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
            </div>
        <!-- End 2nd Image -->
        <!-- Start 3rd section one latest news in one meduim col -->
        <?php include_once("includes/3rdsection.php"); ?>   
        <!-- End 3rd section one latest news in one meduim col -->
        <!-- Start 4th section four latest new in four col-->
        <?php include_once("includes/4thsection.php"); ?>   
        <!-- End 4th section four latest new in four col-->


<!-- Start side section -->
            <!-- Social Follow start -->
        <?php include_once("includes/socialfollow.php"); ?>   
        <!-- Social Follow End -->

        <!-- Ads Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
            </div>
        </div>
        <!-- Ads End -->

        <!-- Popular News Start -->
        <?php include_once("includes/trendingnews.php"); ?>   
        <!-- Popular News End -->

        <!-- Newsletter Start -->
        <div class="mb-3">
            <div class="section-title mb-0">
                <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
            </div>
            <div class="bg-white text-center border border-top-0 p-3">
                <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                <div class="input-group mb-2" style="width: 100%;">
                    <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                    </div>
                </div>
                <small>Lorem ipsum dolor sit amet elit</small>
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Tags Start -->
        <?php include_once("includes/tags.php"); ?>   
        <!-- Tags End -->
    
<!-- End side section -->
            
<!-- News With Sidebar End -->

    <!-- Footer Start -->
    <?php include_once("includes/footer.php"); ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>