<footer>
    <div class="container">
        <div class="foot-wrap">
            <div class="foot-item">
                <div class="foot-item-img">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/phone.svg" alt="phone">
                </div>
                <div class="foot-item-single">
                    <a href="tel:<?php the_field('telfaks', 'options'); ?>"><?php _e('Tel./faks.', 'theme'); ?><?php the_field('telfaks', 'options'); ?></a>
                </div>
                <div class="foot-item-single">
                    <?php /*
                    <a href="tel:<?php the_field('mob_tel', 'options'); ?>"><?php _e('mob.', 'theme'); ?><?php the_field('mob_tel', 'options'); ?></a> */ ?>
                </div>
            </div>
            <div class="foot-item">
                <div class="foot-item-img">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/email.svg" alt="email">
                </div>
                <div class="foot-item-single">
                    <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                </div>
            </div>
            <div class="foot-item">
                <div class="foot-item-img">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/placehold.svg" alt="email">
                </div>
                <div class="foot-item-single">
                    <span><?php the_field('adresas', 'options'); ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>    
</html> 