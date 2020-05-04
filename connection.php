<?php 
	include 'header.php' 
?>
<section class="all_post section_padding">
        <div class="container">
		<div class="col-12">
			<h2 class="contact-title">Connectez-vous </h2>
        </div>
        <div class="col-lg-12">
          <form class="form-contact contact_form"  method="post" id="contactForm" action="index.php"  >
            <div class="row">
              <div class="col-sm-3">
                <div class="form-group">
                    <label for="email"></label>
                  <input class="form-control" name="email" id="email" type="email" placeholder='Entrer votre email' required >
                </div>
              </div>
              <div class="col-3">
                <div class="form-group">
                    <label for="password"></label>
                  <input class="form-control" name="password" id="password" type="password" placeholder='Votre mot de passe' required >
                </div>
			  </div>
			  <div class="load_btn" style="margin-top: 0!important; padding-top: 17px">
              <input type="submit" name="formsend" class="btn_1"></input>
            </div>
            </div>
          </form>
        </div>
		</div>
        </div>
    </section>

<?php include 'footer.php' ?>