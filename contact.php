<?php include 'header.php' ?>


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>Nous Contacter</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Acceuil<span>/</span>Nous Contacter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
          <div id="map" ></div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2629.8140891186254!2d2.2677351!3d48.7663465!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ca5c91699fb755f!2sBibiche%20Coiffure!5e0!3m2!1sfr!2sfr!4v1588512056538!5m2!1sfr!2sfr" 
                  width="100%" height="600" frameborder="0" style="border:0;" 
                  allowfullscreen="" aria-hidden="false" tabindex="0">
            </iframe>
          </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entrer en Contact</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" 
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <label for="message"></label>
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    placeholder='Entrer votre message' required ></textarea>
                </div>
              </div>
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
              <div class="col-12">
                <div class="form-group">
                    <label for="subject"></label>
                  <input class="form-control" name="subject" id="subject" type="text" placeholder='Le sujet de votre message' required >
                </div>
              </div>
            </div>
            <div class="load_btn">
              <input type="submit" class="btn_1"></input>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>23 rue de Verdun</h3>
              <p>Chatenay-Malabry, 92290</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>(+33)6 95 42 46 38</h3>
              <p>Tous les jours de 9h à 19h</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>bibichelington@gmail.com/h3>
              <p>Mail à envoyer à toute heure</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php include 'footer.php' ?>