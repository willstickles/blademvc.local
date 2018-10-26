<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;

/**
 * Home controller
 *
 * PHP version 7.0.22-2
 */
class Home extends \Core\Controller
{
	
	/**
	 * Before filter
	 *
	 * @return void
	 */
	protected function before() {
//		echo "(before) ";
//		return false;
	}
	
	/**
	 * After filter
	 *
	 * @return void
	 */
	protected function after() {
//		echo " (after)";
	}
	
	/**
	 * Show the index page
	 *
	 * @return void
	 */
	public function indexAction() {
		View::renderTemplate( 'Home.index');
	}
	
	public function infoAction() {
		echo phpinfo();
	}
	
	public function testAction() {
		function super_unique($array,$key)
		{
			$temp_array = [];
			foreach ($array as &$v) {
				if (!isset($temp_array[$v[$key]]))
					$temp_array[$v[$key]] =& $v;
			}
			$array = array_values($temp_array);
			return $array;
			
		}
		
		
		$arr="";
		$arr[0]['id']=0;
		$arr[0]['titel']="ABC";
		$arr[1]['id']=1;
		$arr[1]['titel']="DEF";
		$arr[2]['id']=2;
		$arr[2]['titel']="ABC";
		$arr[3]['id']=3;
		$arr[3]['titel']="XYZ";
		
		echo "<pre>";
		print_r($arr);
		echo "unique*********************<br/>";
		print_r(super_unique($arr,'titel'));
	}
}