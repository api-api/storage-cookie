<?php
/**
 * Storage loader.
 *
 * @package APIAPI\Storage_Cookie
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_storage_cookie' ) ) {

	/**
	 * Registers the storage using cookies.
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_storage_cookie() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->storages()->register( 'cookie', 'APIAPI\Storage_Cookie\Storage_Cookie' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_storages_loader'] ) ) {
				$GLOBALS['_apiapi_storages_loader'] = array();
			}

			$GLOBALS['_apiapi_storages_loader']['cookie'] = 'APIAPI\Storage_Cookie\Storage_Cookie';
		}
	}

	apiapi_register_storage_cookie();

}
