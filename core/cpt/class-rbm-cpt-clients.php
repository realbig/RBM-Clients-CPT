<?php

/**
 * Class RBM_CPT_Clients
 *
 * Creates the post type.
 *
 * @since {{VERSION}}
 */
class RBM_CPT_Clients extends RBM_CPT {

	public $post_type = 'customer';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'admin-post';
	public $post_args = array(
		'hierarchical' => true,
		'supports'     => array( 'title', 'editor', 'author', 'thumbnail' ),
		'has_archive'  => true,
		'rewrite'      => array(
			'slug'       => 'customer',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
	);

	/**
	 * RBM_CPT_Clients constructor.
	 *
	 * @since {{VERSION}}
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Client', RBM_Clients_CPT_ID );
		$this->label_plural   = __( 'Clients', RBM_Clients_CPT_ID );

		$this->labels = array(
			'menu_name' => __( 'Clients', RBM_Clients_CPT_ID ),
			'all_items' => __( 'All Clients', RBM_Clients_CPT_ID ),
		);

		parent::__construct();
		
	}
}