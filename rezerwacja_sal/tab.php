
<?php 

//session_start();

// 	if ((!isset($_SESSION['zalogowany'])))
// 	 {
// 	 header('Location: index.php');
//  exit();
// 	}

include('lacznosc_rezerwacja.php');
$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
$mysqli->set_charset("utf8");



							if ($result=$mysqli->query("SELECT * FROM sala_1 ORDER BY id DESC")){
								
										if($result->num_rows >0){
												echo'<table>';
												echo '<tr><th>id</th><th>nazwa klijenta  </th><th> data </th><th> w godzinach </th><th> Sala nr </th><th> Telefon </th><th> Email </th><th> opis </th><th> status </th><th> administrator  </th><th> data</br>modyfikacji</th>'  ;
												
												$sala=1;
												
												while($row=$result->fetch_object()){
													
													echo'<tr>';
													echo'<td>'. $row->id.'</td>';
													echo'<td>'. $row->client_name .'</td>';
													echo'<td>'. $row->dey.'/'.$row->month.'/'.$row->year.'</td>';
													echo'<td>'. $row->od_h.' - '.$row->do_h.'</td>';
													echo'<td>'. $row->sala.'</td>';
													echo'<td class="fon_width">'. $row->tel.'</td>';
													echo'<td>'. $row->email.'</td>';
													echo'<td class="textarea_width">'. $row->opis.'</td>';
													echo'<td>'. $row->status.'</td>';
													echo'<td>'. $row->user.'</td>';
													echo'<td>'. $row->data.'</td>';
													echo"<td> <a href='records.php?id=" .$row->id." '>Edytuj</a></td>";
													echo"<td> <a href='delete.php?id=" .$row->id." '>Usuń</a></td>";
													
													echo'</tr>';
												}
												
												echo'</table>';
												
												}else{
											echo 'brak rekordów';
										}
									}else{
								
									echo"error". $mysqli->error;
								}

$mysqli->close();
?>

