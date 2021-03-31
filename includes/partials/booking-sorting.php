<?php 
  include_once 'classes/Movies.php';
  // geting all of projections
  $projects = new Movies();
  $result = $projects->getAllProjections();
// showing all of projections data
  foreach ($result as $row):?>
    <?php $_POST['sess'] = $row->seats;?>

  <tbody>
    <form method="post" action="bookingtickets.php">
    <tr>
      <th scope="row"></th>
      <td><input type="text" name="movie_name" value="<?=$row->name?>" hidden><?=$row->name?></td>
      <td><input  name="projection_time" value="<?=$row->projection_time?>" hidden><?=$row->projection_time?></td>
      <td><input  name ="ticket" value="<?=$row->ticket?>" hidden><?=$row->ticket?></td>
      <td>
        <?php 
        $movie_name = $row->name;
        $sala_seats = $row->seats;
        $seat = new Ticket();
        $new = $seat ->freeSeats($movie_name,$sala_seats);
// math to see how mutch seats ara left
        foreach ($new as $me):
         ?>
        <?php echo "<input name='seats_taken' value='$me->SUM' hidden>";  echo $me->SUM;endforeach?>Avaible of:<?=$row->seats?></td>
      <input type="text" name="sala_seats" value="<?=$row->seats?>" hidden>
      <td><input type="number" id="res_ticket" name="res_ticket" pattern="[0-9]+" oninvalid="setCustomValidity('Please use only numbers')" required></td>
      <?php 
      // if all seats reserved dont show button reserve
      if($me->SUM == 0 && $me->movie_name == $row->name){
        echo '<td><p>No More Reservations Left</p></td>';
      }else{
        echo '<td><button type="submit" name="res" id="res">Reserve</button></td>';
      }
      ?>
      
    </tr> 
  </form>
  </tbody>
<?php endforeach ?>
</table>