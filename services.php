<?php require_once("../../../wp-load.php");
 ?>

<?php get_header() ?>

<div class="services-con">
  <?php $posts=get_posts(["post_type"=>"sevices"]);
    foreach($posts as $post){
        setup_postdata($post);
        $img=get_field("services");
        ?>
        
        <div class="pic-desc" style="background-image:url(<?php echo esc_url($img)?>);background-size:cover;background-position:center">
            
        </div>
        <div class="service-pic">
            <h3><?php the_title() ?></h3>
            <p><?php the_content() ?></p>
        
    </div>
    <?php }
    ?>


</div>
<!-- conditionally render on big screen -->
<script>
              console.log(window.innerWidth);
            if(window.innerWidth >= 1024){
                let bigSer=document.getElementsByClassName("services-con")[0];
                let big =document.createElement("DIV");
                let desArr=[];
                for(i=0;i<document.getElementsByClassName("pic-desc").length;i++){
                    big.appendChild(document.getElementsByClassName("pic-desc")[i]);
                    big.appendChild(document.getElementsByClassName("service-pic")[i]);
                }
                // [...document.getElementsByClassName("pic-desc")].forEach(item=>big.appendChild(item));
                // [...document.getElementsByClassName("service-pic")].forEach(item=>big.appendChild(item));
                // big.appendChild(document.getElementsByClassName("pic-desc"));
                // big.appendChild(document.getElementsByClassName("service-pic"));
        
                while (bigSer.firstChild) {
                   bigSer.removeChild(bigSer.lastChild);
                    }
             document.getElementsByClassName("services-con")[0].appendChild(big);
                
            }
        </script>
<?php get_footer() ?>