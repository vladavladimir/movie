<?php 
// geting data
$user_id = $_SESSION['id'];
$sala_seats = htmlspecialchars($_POST['sala_seats']);
$reserve_seats = htmlspecialchars($_POST['seats_taken']);
$res_ticket = htmlspecialchars($_POST['res_ticket']);
// must chk if seats is emty or non is reserved to set as 0 to work
if ($reserve_seats == '') {
  $reserve_seats = 0;
}
// chk if the number of seats in sala match number od reservation and preventig reservationover that
if ($res_ticket - $reserve_seats > 0) {
  header("Location: profile.php?error=to");
}else{
  $movie_name =htmlspecialchars($_POST['movie_name']);
  $projection_time = htmlspecialchars($_POST['projection_time']);
  $ticket = htmlspecialchars($_POST['ticket']);
  $res_ticket = htmlspecialchars($_POST['res_ticket']);
  $sala_seats = htmlspecialchars($_POST['sala_seats']);
  
  // reserving seats
  $reserveTicket = new Ticket();
  $reserveTicket->makeRes($user_id, $movie_name, $projection_time, $ticket, $res_ticket, $sala_seats);
  if ($reserveTicket == true) {
    header('Location: profile.php?succ=res');
    }elseif($ress + $res_ticket < $sess){
      header('Location: profile.php?error=to');
    }
  
}
 ?>