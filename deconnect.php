<?php
session_start();
$_SESSION = array();
session_destroy();
include "header.php"; 
?>

      <!-- banner post start-->
      <section class="banner_post">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="banner_post_1 banner_post_bg_1">
                    <div class="banner_post_iner text-center">
                        <a href="archive.html"><h5> Gallerie</h5></a> 
                        <a href="archive.html"><h2>Tout notre savoir faire 
                            en quelques photos </h2></a> 
                        <p>Bibiche Coiffure</p>
                    </div>
                </div><div class="banner_post_1 banner_post_bg_2">
                    <div class="banner_post_iner text-center">
                        <a href="shop.html"><h5> Notre Magasin</h5></a> 
                        <a href="shop.html"><h2>AVisitez notre magasin
                            en ligne et faites vos achats</h2></a> 
                        <p>Bibiche Coiffure</p>
                    </div>
                </div>
                <div class="banner_post_1 banner_post_bg_3">
                    <div class="banner_post_iner text-center">
                        <a href="contact.html"><h5> Nous contacter</h5></a> 
                        <a href="contact.html"><h2>Laissez nous votre
                            message ou venez nous voir </h2></a> 
                        <p>Bibiche Coiffure</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner post end-->

    <!-- subscribe form start-->
    <div class="subscribe_form padding_top margin_top">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="subscribe_form_iner">
                        <form method="POST">
                            <div class="form-row align-items-center justify-content-center">
                                <div class="col-md-12 col-lg-3">
                                <h3>Inscrivez-vous 
                                        à notre Newsletter</h3>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="name"></label>
                                    <input type="text" id="name"  name="name" class="form-control" placeholder="Votre Nom">
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="email"></label>
                                    <input type="text"  id="email" name="email"  class="form-control" placeholder="Votre email">
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for=""></label>
                                    <input class="btn_1" type="submit" name="formsend" ></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- subscribe form end-->


	<?php 
	if (isset($_POST['formsend'])) {
		extract($_POST);		
		if (!empty($name) && !empty($email)) {
			echo 'POST NON VIDE';
			echo $name . '  ';
			echo $email;
			
			
		}
	}
	?>
  <?php include "footer.php"; ?>