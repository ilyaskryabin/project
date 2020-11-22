<?php
namespace Classes;
use Classes\AbstractBox;

class DBbox extends AbstractBox
{
	
	private $link;
	function __construct()
	{
		
		$host = 'localhost'; // адрес сервера 
		$database = 'project2756'; // имя базы данных
		$user = 'root'; // имя пользователя
		$password = ''; // пароль
		 
		// подключаемся к серверу
		$this->link = mysqli_connect($host, $user, $password, $database) 
		    or die("Ошибка " . mysqli_error($link));
		 
		// выполняем операции с базой данных

		  


 
		
	}
	public function save()
	{
	
		foreach (parent::$data as $key => $value) {
			
			$result = mysqli_query($this->link ,"REPLACE INTO data_box VALUES ('$key' ,'$value')");
		}
		
	}
    public function load()
    {
    	$db_data = array();
    	$db_pointer = mysqli_query($this->link ,"SELECT * FROM data_box ");
		   
	    $rows = mysqli_num_rows($db_pointer); // количество полученных строк
 
		    for ($i = 0 ; $i < $rows ; ++$i)
		    {
		        $row = mysqli_fetch_row($db_pointer);
		     	if (!empty($row)) {
		     		parent::$data[$row[0]] = $row[1];
		     	} 
		    }
		mysqli_free_result($db_pointer);
	}
}