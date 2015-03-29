<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?></title>

<?php wp_head(); ?>
</head>
<body>
<header class="header-bg">
        <div class="container">
            <div class="navbar-header navbar-inverse ">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="#navbar" class="collapse navbar-collapse">
                
                <nav class="blog-nav nav-item">
                    <?php    /**
                        * Displays a navigation menu
                        * @param array $args Arguments
                        */
                        $args = array(
                            'theme_location' => 'menu',
                            'menu' => 'menu',
                            'container' => 'false',
                            'container_class' => '',
                            'container_id' => '',
                            'menu_class' => 'menu, nav-item',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                            'depth' => 0,
                            'walker' => ''
                        );
                    
                        wp_nav_menu( $args );?>
                    <!-- <a class="nav-item" href="<?php echo home_url(); ?>">Home</a>
                    <a class="nav-item" href="#">Work</a>
                    <a class="nav-item" href="#">Clients</a>
                    <a class="nav-item" href="#">Blog</a>
                    <a class="nav-item" href="#">Contact</a> -->
                </nav>
            </div>
        </div>
</header>