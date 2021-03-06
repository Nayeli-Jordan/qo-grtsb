<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////



add_action('init', function(){	

	$labels = array(
		'name'          => 'Cliente',
		'singular_name' => 'Cliente',
		'add_new'       => 'Nuevo Cliente',
		'add_new_item'  => 'Nuevo Cliente',
		'edit_item'     => 'Editar Cliente',
		'new_item'      => 'Nuevo Cliente',
		'all_items'     => 'Cliente',
		'view_item'     => 'Ver Cliente',
		'search_items'  => 'Buscar Cliente',
		'not_found'     => 'No hay Cliente.',
		'menu_name'     => 'Clientes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_ui'            => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clientes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-money'
	);
	register_post_type( 'clientes', $args );	

	$labels = array(
		'name'          => 'Proyecto',
		'singular_name' => 'Proyecto',
		'add_new'       => 'Nuevo Proyecto',
		'add_new_item'  => 'Nuevo Proyecto',
		'edit_item'     => 'Editar Proyecto',
		'new_item'      => 'Nuevo Proyecto',
		'all_items'     => 'Proyecto',
		'view_item'     => 'Ver Proyecto',
		'search_items'  => 'Buscar Proyecto',
		'not_found'     => 'No hay Proyecto.',
		'menu_name'     => 'Proyectos'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_ui'            => 'edit.php?post_type=page',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'proyectos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-admin-customizer'
	);
	register_post_type( 'proyectos', $args );	

	$labels = array(
		'name'          => 'Brief´s',
		'Singular_name' => 'Brief´s',
		'add_new'       => 'Nuevo Brief',
		'add_new_item'  => 'Nuevo Brief',
		'edit_item'     => 'Editar Brief',
		'new_item'      => 'Nuevo Brief',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Brief',
		'search_items'  => 'Buscar Brief',
		'not_found'     => 'No hay Brief.',
		'menu_name'     => 'Brief'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'sistema' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-id-alt'
	);
	register_post_type( 'sistema', $args );	

	$labels = array(
		'name'          => 'Cliente',
		'Singular_name' => 'Cliente',
		'add_new'       => 'Nuevo Cliente',
		'add_new_item'  => 'Nuevo Cliente',
		'edit_item'     => 'Editar Cliente',
		'new_item'      => 'Nuevo Cliente',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Cliente',
		'search_items'  => 'Buscar Cliente',
		'not_found'     => 'No hay Cliente.',
		'menu_name'     => 'QO Clientes'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_clientes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_clientes', $args );	

	$labels = array(
		'name'          => 'Proveedor',
		'Singular_name' => 'Proveedor',
		'add_new'       => 'Nuevo Proveedor',
		'add_new_item'  => 'Nuevo Proveedor',
		'edit_item'     => 'Editar Proveedor',
		'new_item'      => 'Nuevo Proveedor',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Proveedor',
		'search_items'  => 'Buscar Proveedor',
		'not_found'     => 'No hay Proveedor.',
		'menu_name'     => 'QO Proveedores'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_proveedores' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_proveedores', $args );

	$labels = array(
		'name'          => 'Cotizacion',
		'Singular_name' => 'Cotizacion',
		'add_new'       => 'Nuevo Cotizacion',
		'add_new_item'  => 'Nuevo Cotizacion',
		'edit_item'     => 'Editar Cotizacion',
		'new_item'      => 'Nuevo Cotizacion',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver Cotizacion',
		'search_items'  => 'Buscar Cotizacion',
		'not_found'     => 'No hay Cotizacion.',
		'menu_name'     => 'QO Cotizaciones'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'qo_cotizaciones' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail' ),
		'menu_icon' 		 => 'dashicons-list-view'
	);
	register_post_type( 'qo_cotizaciones', $args );	

});