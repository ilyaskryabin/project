<?php
/**
 * 
 */
namespace Classes;

require 'c:WAPMBABY\www\1002project\Interface.php';
use Classes\iBox;
class AbstractBox implements iBox
{
	protected static $data = array();
	
	function __construct()
	{
		
	}
	public function setData($key, $value)
	{
		self::$data[$key]=$value;
	}
    public function getData($key)
    {
    	return self::$data[$key];
    }
    public function save(){
    }
    public function load(){

    }
}