<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head()?>
</head>
<body>
<header>
<nav>
    <ul class="upperul">
        <li class="barberli"><a href=<?php echo home_url(); ?>>Home</a></li>
        <li class="aboutli"><a href=<?php echo get_theme_file_uri()."/about.php"; ?>>About</a></li>
        <li class="servicesli"><a href=<?php echo get_theme_file_uri()."/services.php"; ?>>Services</a></li>
        
    </ul>

<ul class="phoneul">
  <li class="logo"><a href=<?php echo home_url();?> class="logo">Turkish Barbers</a></li>
  <li class="menu"><i class="fa fa-bars"></i></li>
</ul>
</nav>
</header>