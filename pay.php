<?php
include('admin/connect.php');
include('session.php');
$get_id=$_GET['id'];

			
						function createRandomPassword() {
					$chars = "abcdefghijkmnopqrstuvwxyz023456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$confirmation = createRandomPassword();
						

/* mysql_query("update order_details set status='Pending',transaction_code='$confirmation',modeofpayment='Online' where MemberID='$get_id'")or die(mysql_error());
 */


?>

<?php include('header.php'); ?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<body>
    <?php
    include('navtop.php');
    ?>
    <div id="background">
  

        <div id="page">
            <div id="sidebar">
                <a href="user_index.php" class="logo"><img src="images/wine8.png" alt=""></a>
                <ul>
                    <li>
                        <span><a href="user_index.php"><i class="icon-home icon-large"></i>Home</a></span>
                    </li>
                    <li>
                        <span><a href="user_guitar.php"><i class=" icon-th-large icon-large"></i>Products</a></span>
                    </li>

                    <li>
                        <span><a href="user_about.php"><i class="icon-info-sign icon-large"></i>&nbsp;About US</a></span>
                    </li>

                    <li>
                        <span><a href="user_contact.php"><i class="icon-phone-sign icon-large"></i>Contact US</a></span>
                    </li>


                </ul>
                <?php include('sidebar.php'); ?>
                <div class="newsletter">

                </div>
            </div>
            <div id="content">
                <div class="hero-unit-table">
                    <div id="header">
                        

                    </div>
                    <div id="body">
                        <h3>Payment</h3>
                        <div class="hero-unit-table">
                        <span id="paypal-button"></span>
                        <?php
                        $total = 0;
                                    $cart_table = mysqli_query($conn, "select  * from order_details where memberID='$ses_id'") or die(mysqli_error());
                                    $cart_count = mysqli_num_rows($cart_table);
                                    while ($cart_row = mysqli_fetch_array($cart_table)) {
                                        $order_id = $cart_row['orderid'];
                                        $product_id = $cart_row['productID'];
                                        $product_query = mysqli_query($conn, "select * from tb_products where productID='$product_id'") or die(mysqli_error());
                                        $product_row = mysqli_fetch_array($product_query);

                                    }
                                    if ($cart_count != 0) {
                                $result = mysqli_query($conn, "SELECT sum(total) FROM order_details WHERE memberID='$ses_id' and status = 'Pending'") or die(mysqli_error());
                                while ($rows = mysqli_fetch_array($result)) {
                        $total = $rows['sum(total)'];
                                 }
                            } 
                                        ?>
	
						
					
                           
                    </div>
                    </div>
                    <div id="footer">
<?php include('footer_user.php'); ?>
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,
 
        //app's client id's
    client: {
        sandbox:    'AajzLvIrFvyOWy4AZ7jlItP5Sesk7kOod3QMBr9l9qq57Hf2IZmhJPmPrQWko1Sj0aNcmm4Hdi0Wbx8A',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },
 
    commit: true, // Show a 'Pay Now' button
 
    style: {
        color: 'gold',
        size: 'small'
    },
 
    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                        //total purchase
                        amount: { 
                            total: '<?php echo $total; ?>', 
                            currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },
 
    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
            console.log(payment)
            location.replace('paid.php?id=<?php echo $_GET['id'] ?>')           
        });
    },
 
}, '#paypal-button');
</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer_bottom.php'); ?>
</body>
</html>



						
                               