        <footer>
            <div class="col-1">
                <?php the_custom_logo();?>
            </div>

            <div class="col-2">
                <?php dynamic_sidebar('col-2-sidebar');?>
            </div>

            <div class="col-3">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu'
                ));?>
            </div>

            <div class="col-4">
                <?php dynamic_sidebar('col-4-sidebar');?>
            </div>
        </footer>        
        
        <?php wp_footer();?>
    </body>
</html>