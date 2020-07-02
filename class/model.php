<?php

class Model {
	
	
	
	public function insertExcel($arr) {
		
		$fields = '';
		
		foreach($arr[2] as $key => $cell) {
			$fields .= '`'.$key.'`'.',';
		}	
		$fields = trim($fields,',');
		
		$str = '';
		// INSERT INTO `main` (``,``,``..) VALUES ('','','',),(),(),();
		foreach($arr as $item) {
			$str .= "(";
			foreach($item as $cell) { 
				$str .= "'".$this->db->real_escape_string($cell)."',";
			}
			$str = trim($str,",");
			$str .= "),";
		}
		$str = trim($str,",");
		$query = "INSERT INTO `excel_table` (".$fields.") VALUES ".$str;

		echo "
			<style type='text/css'>
				body{margin: 0; background-color: #1874CD; display:flex; align-items:center; justify-content:center;flex-direction:column;}
				div{font-family:sans-serif;font-size: 35px;color: #B2FF59;}
				.check-table{
					display: block;
					/* width: 100% !important; */
					padding: 0.4em 1em;
					margin-top: 40px;
					color: #fff;
					text-align: center;
					cursor: pointer;
					font-size: 18px;
					white-space: nowrap;
					/* -webkit-user-select: none; */
					-moz-user-select: none;
					-ms-user-select: none;
					user-select: none;
					border: none;
					letter-spacing: normal;
					word-spacing: normal;
					vertical-align: top;
					text-rendering: auto;
					background-color: #999;
					border-radius: 1.2em;
					padding: 15px 30px;
					text-decoration: none;
					font-family: sans-serif;
			}
			</style>

			<div>Успешно загружено!</div>
			<a href='/table.html' class='check-table'>смотреть таблицу</a>
		";
		
		$result = $this->db->query($query);
		if($result) {
			return TRUE;
		}
	
	}
	
	
	
	public function connect() {
		$this->db = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		if($this->db->connect_error) {
			throw new Exception("Ошибка соединения : ".$this->db->connect_errno."|".iconv("CP1251","UTF-8",$this->db->connect_error));
		}
		
		$this->db->query("SET NAMES 'UTF8'");
	}
	
	public function __construct() {
		try {
			$this->connect();
		}
		catch(\Exception $e) {
			echo $e->getMessage();
			exit();
		}	
	}
}
?>