<!-- contains header -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>29Kreativ</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 

</head>

<body>
<?php wp_head()?> 
    <!-- navigation begins -->
    <nav class="topnav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            
        <!-- <img src="./images/logo.png" alt="" class="icon-nav"> -->
        <?php the_custom_logo();?>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
        
        
 
          <div class="nav-links">


        
          <ul>
          <?php wp_nav_menu(array(
            'theme_location' => 'primary',
        ));
        ?>

                <!-- <li><a href="#" target="_blank" class="active">About</a></li>
                <li><a href="#" target="_blank">Products</a></li>
                <li><a href="#" target="_blank">Commitments</a></li>
                <li><a href="#" target="_blank">Stories</a></li>
                <li><a href="#" target="_blank">Indian Blog</a></li> -->
            </ul>
        </div> 
    </div>

    </nav>
    <!-- navigation-ends -->