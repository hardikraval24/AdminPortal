<?php	
	include "Database.php";

	class MyApp extends Database
	{
		/**
		* User Registration
		* @param string $query
		*/
		public function register($query)
		{
			return mysqli_query($this->connection,$query);
		}

		/**
		* User Login
		* @param string $query		
		*/
		public function login($query)
		{
			return mysqli_query($this->connection,$query);
		}


		/**
		* Fetch all users from users table.
		* @param string $query		
		*/
		public function users()
		{
			$query = "SELECT * FROM `users`";
			$result = mysqli_query($this->connection,$query);

			$data = array();
			
			while($users = mysqli_fetch_assoc($result))
			{
				$data[] = $users;
			}

			return $data;

		}
	}
?>