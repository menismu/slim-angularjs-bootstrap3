<?php
require 'daos/ItemDAO.php';

/**
 * It handles the business logic of item model.
 */
class ItemService {
	
	/**
	 * DAO class to retrieve data from the database.
	 */
	var $itemDAO;
	
	function ItemService() {
		$this->itemDAO = new ItemDAO();
	}
	
	/**
	 * It retrieves all the items stored.
	 *
	 * @return List of all items stored.
	 */
	function all() {
		
		// no logic to get all, calling DAO method directly
		return $this->itemDAO->all();
	}
	
	/**
	 * It retrieves the item with the given id.
	 *
	 * @param $id Identifier
	 *        	of the item to retrieve.
	 * @return The item with the given id
	 */
	function get($id) {
		
		// no logic to get item with the given id, calling DAO method directly
		return $this->itemDAO->get($id);
	}
}

?> 