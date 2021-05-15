<html>

<head>
    
    <script src="https://use.fontawesome.com/3903c9d7fd.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css" rel="stylesheet">
  
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<div>
<ul class="menu">
    
    <li class="menu_list">
       
        <h2>My-App</h2>
    </li>
    <li class="menu_list">
        <span class="front fas fa-plus"></span>
        <a href="./AddnewJson.php" class="side">ADD NEW</a>
    </li>

    <li class="menu_list">
        <span class="front fas fa-times-circle"></span>
        <a href="./index.php" class="side">EXIT</a>
    </li>

</ul>

</div>

<?php
            include "Styler.php";
						$data = file_get_contents('Data.json');
						$data = json_decode($data);
						foreach($data as $row){


              ?>      
            
<body>
              <div class="container shoe">
                <div class="productImage"><img src="<?php echo $row->photo; ?>"></div>
                <div class="size shoeSize">
          
                </div>
                <div class="price shoePrice">
                <h4>POWER:</h4>
                  <h2><?php echo $row->characteristics; ?></h2>
                 
                </div>
                <div class="color shoeColor">
                  
             
                </div>
                <div class="productName shoeName">
                <h4>NAME:</h4>
                <h2><?php echo $row->name; ?></h2>
          
                
                </div>
            </div>
            
            <?php
            
            }
            
          ?>

</body>



</html>