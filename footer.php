<footer>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                <?php if( is_active_sidebar( 'footer-sidebar-1' ) ){ 

                  dynamic_sidebar( 'footer-sidebar-1' );
                  }else {echo '<p></p>';}?>

  
                </div>
                <div class="col-lg-3 col-md-12 text-center">
                    <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/images/dog_footer.png">
                </div>
               
                </div>
                <div class="row">
             
                
                
               
                <div class="col-lg-4 col-md-6">
                <?php if( is_active_sidebar( 'footer-sidebar-2' ) ){ 
                    
                                      dynamic_sidebar( 'footer-sidebar-2' );
                                      }else {echo '<p></p>';}?>
                 </div>
                 <div class="col-lg-4 col-md-6">
                <?php if( is_active_sidebar( 'footer-sidebar-3' ) ){ 
                    
                                      dynamic_sidebar( 'footer-sidebar-3' );
                                      }else {echo '<p></p>';}?>
                              </div>       
                              <div class="col-lg-4 col-md-12">
                <?php if( is_active_sidebar( 'footer-sidebar-4' ) ){ 
                    
                                      dynamic_sidebar( 'footer-sidebar-4' );
                                      }else {echo '<p></p>';}?>
                              </div>     
               
                
            </div>
          
        </div>
    </div>
   
</footer>
<a href="#0" class="cd-top js-cd-top">Top</a>
<?php wp_footer(); ?> 
</body>

</html>