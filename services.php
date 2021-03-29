
<?php require_once("../../../wp-load.php");
 ?>

<?php get_header() ?>

<div class="services-con">
  <?php $posts=get_posts(["post_type"=>"sevices"]);
  
    foreach($posts as $post){
        setup_postdata($post);
        $img=get_field("services");
        ?>
        <div class="big">
        <div class="pic-desc" style="background-image:url(<?php echo esc_url($img)?>);background-size:cover;background-position:center">
            
        </div>
        <div class="service-pic">
        
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
    </div>
    </div>
    <?php  }
    ?>


</div>
<!-- conditionally render on big screen -->

<?php get_footer() ?>