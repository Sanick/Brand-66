<footer class="footer-wrapp">
        <div class="container">
            <p>©2013 Rylander Design</p>
            <nav class="footer-nav footer-nav-item">
                <?php    /**
                        * Displays a navigation menu
                        * @param array $args Arguments
                        */
                        $args = array(
                            'theme_location' => 'menu',
                            'menu' => 'menu',
                            'container' => 'false',
                            'menu_class' => 'menu, footer-nav-item',
                        );
                    
                        wp_nav_menu( $args );?>
            </nav>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
    