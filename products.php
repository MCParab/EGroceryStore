
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php" Style="color:#333;">Products</a></li>
                    <li style="background-color: #2ecc71;padding:10px;border-radius: 5px;"><a href="Shopping_cart.php" >Cart </a></li>
                </ul>
            </div>
  </header>
       
        <section id="product-display">
            
                      <div id="product-categories">
                          <h1>CATEGORIES</h1>
                                 <ul>
                                      <li><a href="#">Fruits And Vegetables</a></li>
                                      <li><a href="#">Pulses</a></li>
                                      <li><a href="#">Snacks And Beverages</a></li>
                                      <li><a href="#">Dairy Products</a></li>
                                      <li><a href="#">Meat And Eggs</a></li>
                                   </ul>
                      </div>

                   
              <div id="product-figures">
                          <?php
                            require('config.php');
                            $conn = mysql_connect($dbhost, $dbusername, $dbpassword);
                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                                  }
                              $sql="Select PID,Name,Qty,Price,Img from Products;";
                              mysql_select_db($database);
                              $retval = mysql_query( $sql, $conn );
                               if(! $retval ) {
                                    die('Could not get data: ' . mysql_error());
                               }
                              while($row = mysql_fetch_array($retval)) {
                               ?>
                                   <figure class="product-figure">
                                      <img src="<?php echo $row['Img'] ?>" />
                                      <h5> <?php echo $row['Name'] ?></h5>
                                       <h5><?php echo $row['Qty'] ?></h5>
                                       <div>
                                       <h4>Rs <?php echo $row['Price']?></h4>
                                       <a href=' productdisplaydetails.php?pid=<?php echo $row['PID'] ?>' >VIEW</a>
                                      </div>
                                   </figure>
                                  <?php } ?>
                 </div>
          </section>

          
         
          
    <footer id="footer_section">
        <p>EGroceryStore -- an ecommerce grocery store website</p>
    </footer>
    
        </body>
    </html>



