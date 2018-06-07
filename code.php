<?php
//ADD TEMPLATE TO PLUGIN WORDPRESS EASY WAY

//ALL YOU NEED IS TO DEFINE:
//THE NAME OF YOUR FUNCTION. DEFAULT = add_template_to_page_my_own_function
//my-custom-page-template.php = YOUR TEMPLATE
//my-custom-page-slug = THE slug IN WORDPRESS OF THE PAGE YOU WANT TO ADD THE TEMPLATE

function add_template_to_page_my_own_function( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = dirname( __FILE__ ) . '/my-custom-page-template.php';
    }
    return $page_template;
}

add_filter( 'page_template', 'add_template_to_page_my_own_function' );

//THATS ALL!!!
//HERE IS A REAL EXAMPLE  

//WORKING EXAMPLE AT MY PLUGIN
//add_template_to_page_my_own_function CHANGED TO add_template_to_page_mantenimiento_jo
//my-custom-page-template.php CHANGED TO mantenimiento-jo1.php
//my-custom-page-slug CHANGED TO mantenimiento-jo
//I CHANGED ALSO THE PATH SO I HAVE THE TEMPLATES IN MY FOLDER templates
//$page_template = dirname( __FILE__ ) . '/templates/mantenimiento-jo1.php';

add_filter( 'page_template', 'add_template_to_page_mantenimiento_jo' );
function add_template_to_page_mantenimiento_jo( $page_template )
{
    if ( is_page( 'mantenimiento-jo' ) ) {
        $page_template = dirname( __FILE__ ) . '/templates/mantenimiento-jo1.php';
    }
    return $page_template;
}
