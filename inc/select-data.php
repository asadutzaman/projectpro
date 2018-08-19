<?php
include'dbconfig.php';
class Crud{
	public function select()
	{
		try {

			$dao = new database();

			$conn = $dao->openConnection();

			$sql = "SELECT * FROM milestones_tbl";

			$resource = $conn->query($sql);

			$result = $resource->fetchAll(PDO::FETCH_ASSOC);

			$dao->closeConnection();
		} catch (PDOException $e) {

			echo "There is some problem in connection: " . $e->getMessage();
		}
		if (! empty($result)) {
			return $result;
		}
	}
}

$r = new Crud();
$rr = $r->select();
print_r($rr);



?>
