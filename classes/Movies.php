<?php  

include_once 'Database.php';
class Movies extends Database
{

	public function pagino($pagino){
		$records = 4;
		$offset = ($pagino-1) * $records;
		$db = $this->connection();
		$stmt = $db->prepare('SELECT COUNT(*) FROM movies');
		$stmt->execute();
		$first = $stmt->fetch(PDO::FETCH_BOTH);
		$total = ceil($first[0] / $records);
		return $total;
	}

	public function getAllMovies($pagino){
		$records = 4;
		$offset = ($pagino-1) * $records;
		$db = $this->connection();
		$stmt = $db->prepare('SELECT COUNT(*) FROM movies');
		$stmt->execute();
		$first = $stmt->fetch(PDO::FETCH_BOTH);
		$total = ceil($first[0] / $records);

		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM movies LIMIT $offset, $records");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		return $result; 

	}

	public function getSingleMovie($id){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM movies WHERE id = :id");
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function getAllProjections(){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT p.movie_id,m.name,m.picture,p.projection_time,s.names,p.ticket,s.seats,p.id FROM projections p JOIN movies m ON p.movie_id = m.id JOIN sala s ON p.sala_id = s.id ORDER BY p.projection_time ASC");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;

	}

	public function getOneProjections($id){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT p.movie_id,m.name,m.picture,p.projection_time,s.names,p.ticket,s.seats,p.id FROM projections p JOIN movies m ON p.movie_id = m.id JOIN sala s ON p.sala_id = s.id  WHERE p.movie_id=:id ORDER BY p.projection_time ASC");
		$stmt->execute(['id'=>$id]);
		$result = $stmt->fetch(PDO::FETCH_OBJ);
		return $result;

	}
}