<?php add_theme_support( 'post-thumbnails');
function scripts_register_occuppe(){
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_script( 'slick', get_template_directory_uri().'/assets/js/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('app', get_template_directory_uri().'/assets/js/app.js',array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'scripts_register_occuppe');
show_admin_bar(false);


?>


<?php
    add_action('init', 'home_register');
    function home_register() {
        $labels = array(
            'name' => _x('Home Slider', 'Home Slider'),
            'singular_name' => _x('Home Slider', 'Home Slider'),
            'add_new' => _x('Adicionar Slide', 'Novo Slide'),
            'add_new_item' => __('Novo Slide'),
            'edit_item' => __('Editar Slide'),
            'new_item' => __('Novo Slide'),
            'view_item' => __('Ver Slide'),
            'search_items' => __('Procurar Slide'),
            'not_found' =>  __('Nenhum Slide encontrado'),
            'not_found_in_trash' => __('Nenhum Slide encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Home Slider'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-images-alt2',
            'register_meta_box_cb' => 'Home_Slider_meta_box',
            'supports' => array('title','editor','thumbnail')
          );
register_post_type( 'home' , $args );
flush_rewrite_rules();
}
?>



<?php
    add_action('init', 'company_register');
    function company_register() {
        $labels = array(
            'name' => _x('Empresa', 'Empresa'),
            'singular_name' => _x('Empresa', 'Empresa'),
            'add_new' => _x('Adicionar Item', 'Novo Item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Item'),
            'not_found' =>  __('Nenhum Item encontrado'),
            'not_found_in_trash' => __('Nenhum Item encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Empresa'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-format-aside',
            'register_meta_box_cb' => 'Company_meta_box',
            'supports' => array('title','editor','thumbnail')
          );
register_post_type( 'company' , $args );
flush_rewrite_rules();
}
?>


<?php
    add_action('init', 'services_register');
    function services_register() {
        $labels = array(
            'name' => _x('Serviços', 'Serviços'),
            'singular_name' => _x('Depoimento', 'Depoimento'),
            'add_new' => _x('Adicionar Item', 'Novo Item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Item'),
            'not_found' =>  __('Nenhum Item encontrado'),
            'not_found_in_trash' => __('Nenhum Item encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Serviços'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-admin-generic',
            'register_meta_box_cb' => 'Services_meta_box',
            'supports' => array('title','editor','thumbnail')
          );
register_post_type( 'services' , $args );
flush_rewrite_rules();
}
?>


<?php
    add_action('init', 'depositions_register');
    function depositions_register() {
        $labels = array(
            'name' => _x('Depoimentos', 'Depoimentos'),
            'singular_name' => _x('Depoimento', 'Depoimento'),
            'add_new' => _x('Adicionar Item', 'Novo Item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Item'),
            'not_found' =>  __('Nenhum Item encontrado'),
            'not_found_in_trash' => __('Nenhum Item encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Depoimentos'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-format-quote',
            'register_meta_box_cb' => 'Services_meta_box',
            'supports' => array('title','editor','thumbnail')
          );
register_post_type( 'depositions' , $args );
flush_rewrite_rules();
}
?>


<?php
    add_action('init', 'clients_register');
    function clients_register() {
        $labels = array(
            'name' => _x('Clientes', 'Clientes'),
            'singular_name' => _x('Cliente', 'Cliente'),
            'add_new' => _x('Adicionar Item', 'Novo Item'),
            'add_new_item' => __('Novo Item'),
            'edit_item' => __('Editar Item'),
            'new_item' => __('Novo Item'),
            'view_item' => __('Ver Item'),
            'search_items' => __('Procurar Item'),
            'not_found' =>  __('Nenhum Item encontrado'),
            'not_found_in_trash' => __('Nenhum Item encontrado na lixeira'),
            'parent_item_colon' => '',
            'menu_name' => 'Clientes'
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'public_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'menu_icon'   => 'dashicons-businessman',
            'register_meta_box_cb' => 'Services_meta_box',
            'supports' => array('title','editor','thumbnail')
          );
register_post_type( 'clients' , $args );
flush_rewrite_rules();
}
?>