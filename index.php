<!DOCTYPE html>
<html>
<head>
    <title>Nunua Electronics</title>
    
</head>
<body bgcolor="red">

<?php
include('header.php');
?>
<body>
    <?php
    include('navtop.php');
    ?>

    <div id="background">

        <div id="page">

            <?php include ('nav_sidebar.php');?>

            

            <div id="content">
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">

                        <center>
                            <h3>Nunua Technologies your one stop shop!&nbsp;</h3>
                            <div class="signup">
                            <p style="font-style: verdana"><b>Already Registered?</b></p> <a href="order.php" class="btn btn-primary"><i class="icon-pencil icon-large"></i>&nbsp;Login</a>
                        </div>

                        <div id="slider" class="nivoSlider">
                            <img src="admin/images/skyworth.png" alt=""/>
                            <img src="admin/images/laptops.jpg" alt=""/>
                            <img src="admin/images/printers.jpg" alt=""/>
                            <img src="admin/images/servers.jpg" alt="" data-transition="slideInLeft"/>
                            <img src="admin/images/phones.png" alt=""/>
                        </div>
                        </center>
                    </div>
                    <!-- end slider -->
			<hr/>
			<center><h3 class = "center alert alert-success" style = "width:500px; font-weight:Bolder;">Top Products for today</h3></center>
                    <div id="body">

                        <div class="body">
                            <ul>
                                <li>
								
                                    <a href="user_laptops.php"><img class = "image-rounded"src="images/a.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="user_tvs.php"><img class = "image-rounded"src="images/b.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a href="user_phones.php"><img class = "image-rounded" src="images/c.jpg" alt=""></a>

                                </li>
                                <li>
                                    <a href="user_printers.php"><img class="img-rounded" src="images/d.jpg" alt=""></a>         
                                </li>

                            </ul>

                          <?php include ('modal_latest.php');?>
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>