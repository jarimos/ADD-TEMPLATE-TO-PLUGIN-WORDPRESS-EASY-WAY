//ADD TEMPLATE TO PLUGIN WORDPRESS EASY WAY

function add_template_to_page_my_own_function( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = dirname( __FILE__ ) . '/my-custom-page-template.php';
    }
    return $page_template;
}

add_filter( 'page_template', 'add_template_to_page_my_own_function' );
