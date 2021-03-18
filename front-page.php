

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
       <div class="image"><img src="<?php echo get_theme_file_uri( "/resources/haircut.jpg" )?>" alt="barber"></img></div>
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
    <div class="prices">
        <div class="waxing"></div>
        <div class="waxingtext"></div>
    </div>
   </div>

   <!-- about page begins here -->
   


</div>
<?php get_footer()?>
