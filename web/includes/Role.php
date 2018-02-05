<?php	
	include "Database.php";

	class Role extends Database
	{
		public function index()
		{
			$results = mysqli_query($this->connection,"SELECT * FROM `roles`") or die(mysqli_error());

			while ( $row = mysqli_fetch_object($results)) {
				$data[] = $row;
			}
			return $data;
		}
	}
		
?>