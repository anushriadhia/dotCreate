<?php
	class Project{
		private $title;
		private $description;
		private $type;
		private $dateAdded;
		private $userID;
		private $termDate;
		private $membersNeeded;
		private $id;

		public static function connect() {
    		return new mysqli("localhost", 
		      				  "root", 
              				  "", 
		      				  "testdb");
  		}
  	// 	public static function create($title, $description, $type, $dateAdded, $userID, $termDate, $membersNeeded) {
   //  		$mysqli = Project::connect();

   //  		$result = $mysqli->query("INSERT INTO Project Values (" .
			//      "'" . $mysqli->real_escape_string($firstName) . "', " .
			//      "'" . $mysqli->real_escape_string($lastName) . "', " .
			//      "'" . $mysqli->real_escape_string($semester) ."'";

			// if ($result) {
   //    			$id = $mysqli->insert_id;
   //    			return new Student($id, $firstName, $lastName, $semester);
   //  		}
   //  		return null;
   //  	}

    	public static function findByID($userID) {
		    $mysqli = Project::connect();

		    $result = $mysqli->query("SELECT * FROM Project WHERE UserID = " . $userID);
		    if ($result) {
		      if ($result->num_rows == 0) {
				return null;
		      }

		      $students_info = $result->fetch_array();


		      return new $students_info;
		    }
		    return null;
		}

		// public static function getAllIDs() {
		// 	$mysqli = Student::connect();

		// 	$result = $mysqli->query("SELECT StudentID FROM Student");
		// 	$id_array = array();

		// 	if ($result) {
		// 	  while ($next_row = $result->fetch_array()) {
		// 		$id_array[] = intval($next_row['StudentID']);
		// 	  }
		// 	}
		// 	return $id_array;
		// }
		
		// private function __construct($id, $firstName, $lastName, $semester) {
		// 	$this->id = $id;
		// 	$this->firstName = $firstName;
		// 	$this->lastName = $lastName;
		// 	$this->semester = new Semester();
		// }

		// public function getID() {
		//     return $this->id;
		//   }

		// public function getFirstName() {
		// 	return $this->firstName;
		// }

		// public function getLastName() {
		// 	return $this->lastName;
		// }

		// public function setFirstName($firstName) {
		// 	$this->firstName = $firstName;
		// 	return $this->update();
		// }

		// public function setLastName($lastName) {
		// 	$this->lastName = $lastName;
		// 	return $this->update();
		// }

		// private function update() {
		//     $mysqli = Students::connect();

		//     $result = $mysqli->query("UPDATE Students SET " .
		// 			     "StudentFirstName=" .
		// 			     "'" . $mysqli->real_escape_string($this->firstName) . "', " .
		// 			     "StudentLastName=" .
		// 			     "'" . $mysqli->real_escape_string($this->lastName) .
		// 			     " WHERE StudentID=" . $this->id);
		//     return $result;
		// }

		// public function getJSON() {

		//     $json_obj = array('StudentID' => $this->id,
		// 		      'StudentFirstName' => $this->firstName,
		// 		      'StudentLastName' => $this->lastName,
		// 		      'Semester' => $this->semester
		//     return json_encode($json_obj);
		// }
	}
?>