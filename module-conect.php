<?php
if(isset($_POST['formsend'])){
		extract($_POST);
		
		if (!empty($password) && !empty($email)) {
			include 'database.php';
			global $db;
				
			$c =$db->prepare("SELECT password,name,inscription FROM users WHERE email = :email");
			$c->execute([
						'email' => $email
						]);
			$result = $c->rowCount();
			$row = $c->fetch();
			if ($result == 0) {
					echo "Vous n'êtes pas encore inscrit sur notre site.";
			}
			else {
				if (password_verify($password, $row[0])) {
					$_SESSION['pseudo'] = $row[1];
					$_SESSION['inscription'] = $row[2];
					}
				else {
					echo "Votre mot de passe ou votre email n'est pas valide";
				}
			}
		}			
		else {
			echo 'Les champs ne sont pas tous remplis';
		}
    }
    ?>