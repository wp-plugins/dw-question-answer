<?php  
/**
 * 
 */
if( ! function_exists('dwqa_archive_question') ) {
    function dwqa_archive_question(){
        query_posts( 'post_type=dwqa-question' );
        require dwqa_load_template( 'archive', 'question', false );
        wp_reset_query();
    }
    add_shortcode( 'dwqa_list_questions', 'dwqa_archive_question' );
}

?>