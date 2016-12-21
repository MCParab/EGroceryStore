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
                    <li><a href="index.php" style="color:#333;">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li style="background-color: #2ecc71;padding:10px;border-radius: 5px;"><a href="Shopping_cart.php">Cart</a></li>
                    
                    
                </ul>
            </div>
        </header>
        
        
        <section class="mybackground_section">
     
                <div class="logo">
                    <div><h1>Freshness you can taste. Values you can trust.</h1>
                    <a href="products.php">Shop Now </a>
                    </div>
                </div>
            
        
        </section>
    
    
    <section id="product_section">
   
          <h1>FEATURED PRODUCTS</h1>
         <div id="product-figures" style="margin:0px auto;height: 350px;">
                          <?php
                            require('config.php');
                            $conn = mysql_connect($dbhost, $dbusername, $dbpassword);
                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                                  }
                              $sql="Select PID,Name,Qty,Price,Img from Products where PID in (1001,1004,1006,1008);";
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
                                       <div style="margin:0px auto;">
                                       <h4>Rs <?php echo $row['Price']?></h4>
                                       <a href=' productdisplaydetails.php?pid=<?php echo $row['PID'] ?>' >VIEW</a>
                                      </div>
                                   </figure>
                                  <?php } ?>
                 </div>


        
    </section>


    <section id="aboutus_section">
      
        <h1>EGroceryStrore  </h1>
        <p>EGroceryStore is the largest comprehensive online grocery store in Mumbai, with large products and brands in our grocery list you will find everything you are looking for. Right from fresh fruits and vegetables, rice and daals, spices and seasonings to packaged bread, bakery and dairy products online and other branded foods online - we have it all. Save time and money, shop at EGroceryStore.com - the best online fruit & vegetable store, meat store, provisions store - an all-encompassing online groceries store of India</p>
        
    </section>
    
     
  

    <footer id="footer_section">
        <p>EGroceryStore -- an ecommerce grocery store website</p>
    </footer>
    
    </body>
</html>