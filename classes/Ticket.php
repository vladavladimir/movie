<?php 

include_once 'classes/Database.php';

class Ticket extends Database
{
	public function makeRes($user_id, $movie_name, $projection_time, $ticket, $res_ticket, $sala_seats){
		$db = $this->connection();
		$stmt = $db->prepare("INSERT INTO reservation (user_id,movie_name,projection_time,ticket,res_ticket,sala_seats) VALUES (:user_id, :movie_name, :projection_time, :ticket, :res_ticket, :sala_seats)");
		$stmt->execute(['user_id'=>$user_id, 'movie_name'=>$movie_name, 'projection_time'=>$projection_time, 'ticket'=>$ticket, 'res_ticket'=>$res_ticket, 'sala_seats'=>$sala_seats]);
		return true;
	}

	public function getReservation($id){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM reservation WHERE user_id = :user_id");
		$stmt->execute(['user_id'=>$id]);
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}

	public function deleteReservation($user_id,$id){
		$db = $this->connection();
		$stmt = $db->prepare('DELETE FROM reservation WHERE user_id = :user_id AND id = :id');
		$stmt->execute(['user_id'=>$user_id, 'id'=>$id]);
	}

	public function freeSeats($movie_name,$sala_seats){
		$db = $this->connection();
		$stmt = $db->prepare("SELECT r.sala_seats,s.seats,r.movie_name,s.seats - SUM(r.res_ticket) AS SUM from reservation r JOIN sala s On r.sala_seats = s.seats WHERE r.movie_name = :movie_name AND r.sala_seats = :sala_seats");
		$stmt->execute(['movie_name'=>$movie_name, 'sala_seats'=>$sala_seats]);
		$seats = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $seats;
	}
}

 ?>