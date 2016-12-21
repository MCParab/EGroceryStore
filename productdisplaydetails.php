
<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>EGroceryStore</title>
        <link rel="stylesheet" href="css/main-style.css" type="text/css"/>
        <script src="js/jquery-2.1.3.min.js"></script>
        
    </head>
    <body>
        
        <header class="Myheader">
           
            <div id="menubar">
                <ul>
                    <li><a style="width:300px;background-color:#333;margin-right:600px;padding:1px;"> <h1>EGroceryStore</h1></a></li>
                    <li><a href="index.php" >Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li style="background-color: #2ecc71;padding:10px;border-radius: 5px;"><a href="Shopping_cart.php">Cart</a></li>

                </ul>
            </div>
        </header>

         
      
        
        
        <section class="display-merchant">
           
        <div id="wrapperdiv">
           <?php 
            $pid=$_GET['pid']; 

                require('config.php');
                      $conn = mysql_connect($dbhost, $dbusername, $dbpassword);
   
                              if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                                   }
                       

                                 $sql="select * from Products where PID=".$pid.";";
                                 mysql_select_db($database);
                                 $retval = mysql_query( $sql, $conn );
   
                                    if(! $retval ) {
                                       die('Could not get data: ' . mysql_error());
                                        }
                               
                                       while($row = mysql_fetch_array($retval)) {

             ?>
                   
                                     
                                          <div style="width:300px;height: 300px;border:1px solid #333;"><img src=" <?php echo $row['Img'] ?> "/></div>
                                          <div style="padding-top: 20px;height: 200px;"> 
                                          <?php  echo nl2br( "<h1>".$row['Name']."</h1>".PHP_EOL.$row['Qty'].PHP_EOL.Price." Rs ".$row['Price'].PHP_EOL."<br/>"); ?>
                                          <a href="productdisplaydetails.php?action=add_to_cart" id="add_to_cart">Add to cart</a><br/>
                                          <a href="Shopping_cart.php" id="buy_products" >Buy products</a>
                                          </div>    
                                                    
                                     
                                     <div style="width:680px;height:auto;margin:0px auto;border-top:1px solid #333;">
                                              <h1>Description</h1>
                                              <p><?php echo $row['Description'] ?></p>
                                     </div>
                  


           <?php } ?>
            
      </div>
  </section>
       
        
        
 <footer id="footer_section">
        <p>EGroceryStore -- an ecommerce grocery store website</p>
    </footer>

        
        
        </body>
    </html>