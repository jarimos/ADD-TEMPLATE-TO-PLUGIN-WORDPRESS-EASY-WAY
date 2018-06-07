//ADD TEMPLATE TO PLUGIN WORDPRESS EASY WAY

add_filter( 'page_template', 'add_template_to_page_my_own_function' );
function add_template_to_page_my_own_function( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = dirname( __FILE__ ) . '/custom-page-template.php';
    }
    return $page_template;
}
