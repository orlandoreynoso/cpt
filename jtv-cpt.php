<?php
/*
Plugin Name: Contenido personalizado para Canal JesusTv
Plugin URI:
Description: Agrega boletines a la página web
Version:     1.0
Author:      Orlando Reynoso
Author URI:  http://www.orlandoreynoso.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'init', 'crear_post_type_boletin', 0 );

function crear_post_type_boletin() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'Boletines', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Boletin', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Boletines', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Boletin Padre', 'gourmet-artist' ),
		'all_items'           => __( 'Todas las Boletines', 'gourmet-artist' ),
		'view_item'           => __( 'Ver Boletin', 'gourmet-artist' ),
		'add_new_item'        => __( 'Agregar Nuevo Boletin', 'gourmet-artist' ),
		'add_new'             => __( 'Agregar Nuevo Boletin', 'gourmet-artist' ),
		'edit_item'           => __( 'Editar Boletin', 'gourmet-artist' ),
		'update_item'         => __( 'Actualizar Boletin', 'gourmet-artist' ),
		'search_items'        => __( 'Buscar Boletin', 'gourmet-artist' ),
		'not_found'           => __( 'No encontrado', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'gourmet-artist' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'boletines', 'gourmet-artist' ),
		'description'         => __( 'Boletin news and reviews', 'gourmet-artist' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => false, /*  Es un comportamiento como las páginas  */
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-video-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Por ultimo registramos el post type
	register_post_type( 'boletines', $args );

}

?>
