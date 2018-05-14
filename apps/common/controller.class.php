<?php
require_once("modules.php");
require_once("router.class.php");

class Superb{
	public $_data = array();
	public $_dir = '';

    function __construct($dir){ 
    	$this->_dir = $dir;
    }
	
    public function __get($name) {
      if (array_key_exists($name, $this->_data)) {
        return $this->_data[$name];
      }
   }

   public function set2($value) {
      $this->_data[] = $value;
   }

   public function Viewer($page) {
     require_once(__DIR__."../../views/" . $this->_dir . "/" . $page .".php");
   }
}
?>