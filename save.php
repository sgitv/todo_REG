<?php

					require_once 'dbconnection.php';
					$name = $_POST['name'];
					$date = $_POST['date'];
					$item = $_GET['item'];
					

							
						
							

							$doneQuery = $db->prepare("
							
							UPDATE items
							SET edit = 0,name=:name,date=:date
							WHERE id = :item
							
							");											
							

							$doneQuery->execute([
								'date'=>$date,
								'name'=>$name,
								'item'=>$item
							
							]);
							

					
				
					header('Location: todoHomeScreen.php');
?>