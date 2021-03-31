<?php

include_once 'classes/Ticket.php';
// if button cancle reservation is presed
if (isset($_POST['cancleRes'])) {
	$user_id = $_SESSION['id'];
	$id = htmlspecialchars($_POST['id']);
	$delete = new Ticket();
	$delete->deleteReservation($user_id,$id);
}
// html part that sowes if user have reservation and form that is used to cancle it
$id = $_SESSION['id'];
$rese = new Ticket();
$myRes = $rese->getReservation($id);
foreach ($myRes as $res): ?>
	<form method="post" action="profile.php">
		<li class="list-group-item" id="email">Reservation :<br><?=$res->movie_name .'; '.$res->projection_time .'; '.$res->ticket*$res->res_ticket.' price'?><br>
			<input name="id" value="<?=$res->id?>" hidden>
		<button type="submit" id="res" name="cancleRes">Cancle reservation</button></li>
<?php endforeach ?>
</form>