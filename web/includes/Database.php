<?php

	class Database
	{
		public $connection;

		public function database()
		{
			$result = mysqli_connect("localhost","root","","sample-project");			

			if(!$result)
			{
				exit("Failed to connect to database!");
			}
			else
			{
				$this->connection = $result;	
			}
		}
	}

?>