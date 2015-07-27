<?php

/**
 * It defines the list of operation over the databse to handle item data.
 */
class ItemDAO {
	
	/**
	 * Current list of items, as no database configured for this example, simulating database in memory list
	 */
	var $list;
	function ItemDAO() {
		$item1 = array ();
		$item1 ['id'] = 1;
		$item1 ['name'] = 'item name 1';
		$item1 ['address'] = 'C/ Especerias, 18';
		$item1 ['postcode'] = '29008';
		$item1 ['numberOfResidents'] = '129';
		
		$item2 = array ();
		$item2 ['id'] = 2;
		$item2 ['name'] = 'item name 2';
		$item2 ['address'] = 'C/ Caleta de Velez, 20';
		$item2 ['postcode'] = '29010';
		$item2 ['numberOfResidents'] = '230';
		
		$this->list = [ 
				$item1,
				$item2 
		];
	}
	
	/**
	 * Retrieves all the items stored in the database.
	 */
	function all() {
		return $this->list;
	}
	
	/**
	 * It retrieves the item with the given id
	 * 
	 * @param $id Identifier
	 *        	of the item to retrieve.
	 * @return The item with the given id.
	 */
	function get($id) {
		$item = null;
		
		foreach ( $this->list as $l ) {
			if ($l ['id'] == $id) {
				$item = $l;
			}
		}
		
		return $item;
	}
}

?>