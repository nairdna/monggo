<?php
class MyDB extends SQLite3{
	function __construct()
	{
		$this->open('db_bslc.db');
	}
}

$db = new MyDB();
?>