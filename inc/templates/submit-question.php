<?php get_header('dwqa'); ?>

<?php do_action( 'dwqa_before_page' ) ?>

    <?php dwqa_load_template('submit-question', 'form' ); ?>

<?php do_action( 'dwqa_after_page' ) ?>

<?php get_footer('dwqa'); ?>