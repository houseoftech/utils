<?php
/**
 * Copyright 2007-2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2007-2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Utils Plugin
 *
 * Utils Util Component
 *
 * @package utils
 * @subpackage utils.controllers.components
 */
class UtilsComponent extends Object {

/**
 * Controller
 *
 * @var mixed $controller
 * @access public
 */ 
	public $controller; 

/**
 * Startup Callback
 *
 * @param object Controller object
 * @access public
 */
	public function startup(&$controller) {
		$this->controller = &$controller;
	}

/**
 * Clean html string using Cleaner helper
 *
 * @param string $text
 * @param string $settings
 * @return string
 * @access public
 */
	public function cleanHtml($text, $settings = 'full') {
		App::import('Helper', 'Utils.Cleaner');
		$cleaner = & new CleanerHelper();
		return $cleaner->clean($text, $settings);
	}

}
?>