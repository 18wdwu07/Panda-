            <?php
                if(has_nav_menu( 'footer_menu' )){
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'container_id' => 'footerMenu'
                    ));
                }
             ?>
        </div>
        <!-- <p>this is from footer.php</p> -->
        <?php wp_footer(); ?>
    </body>
</html>
