<?php
require 'services/ItemService.php';

/**
 * Controller which defines the the operations to handle item data.
 */
class ItemController {
	
	/**
	 * Service with the business logic
	 */
	var $itemService;
	
	/**
	 * Main app
	 */
	var $app;
	function ItemController($app) {
		// initialization
		$this->itemService = new ItemService ();
		$this->app = $app;
		
		// define all the routes
		$app->get ( '/item/all', function () {
			$this->all ();
		} );
		
		$app->get ( '/item/:id', function ($id) {
			$this->get ( $id );
		} );
	}
	
	/**
	 * It retrieves all the items.
	 */
	function all() {
		return $this->responseAsJson ( $this->itemService->all () );
	}
	
	/**
	 * It retrieves the item with the given identifier.
	 *
	 * @param $id Identifier
	 *        	of the item to get
	 */
	function get($id) {
		return $this->responseAsJson ( $this->itemService->get ( $id ) );
	}
	
	/**
	 * Helper method to return the response as JSON.
	 *
	 * @param $json Object
	 *        	to convert to JSON data.
	 */
	function responseAsJson($json) {
		$this->app->response ()->header ( "Content-Type", "application/json" );
		
		echo json_encode ( $json );
	}
}

?>