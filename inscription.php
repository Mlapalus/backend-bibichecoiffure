<?php include 'header.php' ?>

<section>
	<div class="row">
		<div class="col-12">
		<?php if (isset($_SESSION['pseudo'])) 
			{ ?>
			<h2 class="contct-title"> Bienvenue <?= $_SESSION['pseudo']; ?> </h2>
		<?php 
			} else {			
			?>
			<h2 class="contact-title">Devenez membre du site</h2>
			<?php } ?>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form"  method="post" id="contactForm">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="name"></label>
                  <input class="form-control" name="name" id="name" type="text" placeholder='Entrer votre nom' required >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="email"></label>
                  <input class="form-control" name="email" id="email" type="email" placeholder='Entrer votre email' required >
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                    <label for="password"></label>
                  <input class="form-control" name="password" id="password" type="password" placeholder='Votre mot de passe' required >
                </div>
              </div>
			  <div class="col-6">
                <div class="form-group">
                    <label for="cpassword"></label>
                  <input class="form-control" name="cpassword" id="cpassword" type="password" placeholder='Confirmez le mot de passe' required >
                </div>
              </div>

            </div>
            <div class="load_btn">
              <input type="submit" name="formsend" class="btn_1"></input>
            </div>
          </form>
        </div>
		</div>
</section>
<?php 
	if(isset($_POST['formsend'])){
		extract($_POST);
		
		if(!empty($name) && !empty($password) && !empty($cpassword) && !empty($email)) {
			if ($password == $cpassword) {
				
				$options = [ 'cost' => 12,];
				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
			
				include 'database.php';
				global $db;
				
				$c =$db->prepare("SELECT email FROM users WHERE email = :email");
				$c->execute(['email' => $email]);
				$result = $c->rowCount();
				
				if ($result == 0) {
					
					$q = $db->prepare("INSERT INTO users(name,password,email) VALUES(:name,:password, :email)");
					$q->execute([
						'name' => $name,
						'password' => $hashpass,
						'email'=> $email
						]);
					echo "Le compte est créé ! ";
				}
				else {
					echo "Cet email existe déjà";
				}
			} 
			else {
				echo 'Les mots de psse ne sont pas identiques';
			}
			
		} 
		else 
		{
			echo 'Les champs ne sont pas tous remplis';
		}
	}
	include 'footer.php' 
?>