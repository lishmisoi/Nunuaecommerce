<?php
include('admin/connect.php');
include('header.php');

?>
<body>
    <?php
    include('navtop.php');
    ?>
   
        <div id="page">

          <?php include ('nav_sidebar2.php');?>

            <div id="content">
                <div class="hero-unit-table">                        <!-- image slider -->
                    <div class="slider-wrapper theme-default">
                            <center>
                            <h3>Nunua Technologies your one stop shop!</h3>
                          <div id="slider" class="nivoSlider">
                            <img src="admin/images/skyworth.png" alt=""/>
                            <img src="admin/images/laptops.jpg" alt=""/>
                            <img src="admin/images/printers.jpg" alt=""/>
                            <img src="admin/images/servers.jpg" alt="" data-transition="slideInLeft"/>
                            <img src="admin/images/phones.png" alt=""/>
                        </div>
                            </center>

                    <h3><center><b>Top products for today</b></center></h3>
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
                            
                             
                        </div>

                    </div>
                    <div id="footer">
                        <?php include('footer_user.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>