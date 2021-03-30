

<?php 
if(file_exists("../../../wp-load.php")){

require_once("../../../wp-load.php");
}
?>

<?php get_header()?>

<div class="con">
    <!-- home page starts -->
   <div class="upper">
       <p>For the best Hair</p>
   </div>
  <div class="lower">
       <div class="image">
               <div href=<?php echo get_theme_file_uri()."/about.php"; ?> class="linker">
                ABOUT-US
                <a href=<?php echo get_theme_file_uri()."/about.php"; ?>>
                <img src="<?php echo get_theme_file_uri( "/resources/cut.jpg" )?>" alt="barber"></img>
               </a>
               </div>
               <div  class="linker">
                SERVICES
                <a href=<?php echo get_theme_file_uri()."/services.php"; ?>>
                <img   class="image2" src="<?php echo get_theme_file_uri( "/resources/groom.jpg" )?>" alt="barber"></img>
                </a>
               </div>
       </div>
       <div class="contact-us">
        <p>20 Smawthorne Lane</p>
        <p>Castleford,West-Yorkshire</p>
        <p>WF10 XYQ</p>
        <p>079-568-8378</p>
    </div>
       
        <div class="descriptiontext">
            <h3>Opening Times</h3>
            <p>Monday  <span>10am-8pm</span></p>
            <p>Tuesday  <span>10am-8pm</span></p>
            <p>Wednesday  <span>10am-8pm</span></p>
            <p>Thursday <span>10am-8pm</span></p>
            <p>Friday <span>10am-8pm</span></p>
            <p>Saturday <span>10am-8pm</span></p>
            <p>Sunday  <span>10am-8pm</span></p>
        </div>
    </div>
   
   
   </div>

   <!-- about page begins here -->
   


</div>
<?php get_footer()?>
