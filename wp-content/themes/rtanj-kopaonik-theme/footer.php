        <footer class="footer">
            <div class="footer__col">
                <?php the_custom_logo();?>
            </div>

            <div class="footer__col">
                <?php dynamic_sidebar('col-2-sidebar');?>
            </div>

            <div class="footer__col">
                <?php wp_nav_menu( array(
                    'theme_location' => 'footer-menu'
                ));
                
                dynamic_sidebar('col-3-sidebar');?>
            </div>

            <div class="footer__col">
                <?php dynamic_sidebar('col-4-sidebar');?>
            </div>
        </footer>        
        
        <?php wp_footer();?>
    </body>
</html>