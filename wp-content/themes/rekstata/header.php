<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title> 
    <?php wp_head(); ?>
</head>
    
<body>
<?php if ( is_page(7) ) { ?>      
<header class="homepage-head">
    <div class="container">
        <div class="head-wrap">
            <div class="head-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Reakreacine-logo-final.svg" alt="logo">
                </a>
            </div>
            <div class="head-nav">
                <?php wp_nav_menu(array( 
                    'container'  => '<ul></ul>',
                    'menu_class' => 'meniuitem',
                    'theme_location' => 'virsutinis-menu'
                )); ?> 
            </div>
            <?php /*
            <div class="head-lang">
                <div class="head-current">LT <i class="fas fa-sort-down"></i></div>
                <ul class="head-lang-list">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">RU</a></li>
                </ul>
            </div>
            */ ?>
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box home-hmbgr">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <!-- mob menu -->
    <div class="mob-menu-over"></div>
    <div class="mob-menu-wrap">
        <div class="mob-close"><span>x</span></div>
        <div class="mob-menu-logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Reakreacine-logo-blue.svg" alt="logo">
            </a>
        </div>
        <?php wp_nav_menu(array( 
            'container'  => '<ul></ul>',
            'menu_class' => 'meniuitem mob-ul',
            'theme_location' => 'virsutinis-menu'
        )); ?>
        <?php /*
        <ul class="mob-langs">
            <li><a href="#">EN</a></li>
            <li><a href="#">RU</a></li>
        </ul>
        */ ?>
    </div>
    <!-- mob menu -->
</header>
<?php } else { ?>
    <header class="other-head">
    <div class="container">
        <div class="head-wrap">
            <div class="head-logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Reakreacine-logo-blue.svg" alt="logo">
                </a>
            </div>
            <div class="head-nav">
                <?php wp_nav_menu(array( 
                    'container'  => '<ul></ul>',
                    'menu_class' => 'meniuitem inner-nav',
                    'theme_location' => 'virsutinis-menu'
                )); ?> 
            </div>
            <?php /*
            <div class="head-lang">
                <div class="head-current inner-langs">LT <i class="fas fa-sort-down"></i></div>
                <ul class="head-lang-list">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">RU</a></li>
                </ul>
            </div>
            */ ?>
            <button class="hamburger hamburger--squeeze" type="button">
                <span class="hamburger-box inner-pages-hmbgr">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <!-- mob menu -->
    <div class="mob-menu-over"></div>
    <div class="mob-menu-wrap">
        <div class="mob-close"><span>x</span></div>
        <div class="mob-menu-logo">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Reakreacine-logo-blue.svg" alt="logo">
            </a>
        </div>
        <?php wp_nav_menu(array( 
            'container'  => '<ul></ul>',
            'menu_class' => 'meniuitem mob-ul',
            'theme_location' => 'virsutinis-menu'
        )); ?>
        <?php /*
        <ul class="mob-langs">
            <li><a href="#">EN</a></li>
            <li><a href="#">RU</a></li>
        </ul>
        */ ?>
    </div>
    <!-- mob menu -->
</header>
<?php } ?>