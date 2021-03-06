<?php
/*
 * class for doing GET, POST, PUT, DELETE Collect on Haravan /admin/collects... 
 * 
 * @author: phong.nguyen  
 */  
class CollectHRV extends HaravanClient {  
	public function __construct($shop_domain, $token, $api_key, $secret) { 
        parent::__construct($shop_domain, $token, $api_key, $secret); 
    } 
	 
	/*
	 * get one Collect 
	 * 
	 * @author: phong.nguyen 20151028  
	 * @param: string $strID - Collect ID 
	 */  
	public function get_one($strID){  
		return $this->call('GET', '/admin/collects/'. $strID . '.json', array()); 
	}
	
	/*
	 * get all Collect 
	 * 
	 * @author: phong.nguyen 20151028  
	 * @param: string $strID - Collect ID 
	 */  
	public function get_all($arrFilter = array()){  
		return $this->call('GET', '/admin/collects.json', array($arrFilter)); 
	}
	
	/*
	 * post one Collect  
	 * 
	 * @author: phong.nguyen 20151028  
	 * @param: array $arrData - Collect data under array  
	 */  
	public function post_one($arrData){  
		$arrData = array( 'collect' => $arrData);  
		return $this->call('POST', '/admin/collects.json', $arrData);  
	}
	
	/*
	 * delete one Collect  
	 * 
	 * @author: phong.nguyen 20151028  
	 * @param: string $strID - ID need to be deleted 
	 */  
	public function delete_one($strID){  
		return $this->call('DELETE', '/admin/collects/'. $strID . '.json', array() );  
	}
	
	/*
	 * update one Collect  
	 * 
	 * @author: phong.nguyen 20151028  
	 * @param: string $strID - ID need to be updated 
	 * @param: array $arrData - Collect data under array  
	 */  
	public function update_one($strID, $arrData){  
		$arrData = array( 'collect' => $arrData);  
		return $this->call('PUT', '/admin/collects/'. $strID . '.json', $arrData);  
	} 
	 
	/*
	 * get all Collect that product belong to 
	 * ERROR, check this: ha-limits14-api errorAAA collects + product.png 
	 * 
	 * @author: phong.nguyen 20151103   
	 * @param: string $strID - Collect ID 
	 */  
	public function get_all_collects_by_product($strProID){  
		return $this->call('GET', 'admin/collects.json?product_id='. $strProID, array()); 
	} 
		
} 


