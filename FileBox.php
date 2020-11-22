<?php

/**
 * 
 */
namespace Classes;
use Classes\AbstractBox;

class FileBox extends AbstractBox
{
	

	function __construct()
	{
		chmod("file.txt", 0777);
		


 
		
	}
	public function save()
	{
		$pointer = fopen("file.txt", "w");
		$str = "";
		
		foreach (parent::$data as $key => $value) {
			$str .= "$key:$value|";
		}

		fwrite($pointer, $str);
		fclose($pointer);
		
	}
    public function load()
    {
    	
		$pointer = fopen("file.txt", "r");
		$str = fgets($pointer);
		
		$file_data = explode('|', $str);
		
		foreach ($file_data as $value) {
			if (!empty($value)) {	
				list($skey, $data)=explode(':', $value);
			}
			
			parent::$data[$skey] = $data;
		}
		
		fclose($pointer);
	}
}