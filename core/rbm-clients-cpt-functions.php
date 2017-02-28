<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	RBM_Clients_CPT
 * @subpackage RBM_Clients_CPT/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		RBM_Clients_CPT
 */
function RBMCLIENTSCPT() {
	return RBM_Clients_CPT::instance();
}