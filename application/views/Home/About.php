<div id="colorlib-main">

  <div class="colorlib-about">
    <div class="colorlib-narrow-content">
      <div class="row">
        <div class="col-md-6">
          <?php foreach ($tampil_about as $tampil) {
            if($tampil->place == 1){
           ?>
          <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?php echo base_url() ?>Assets/images/<?php echo $tampil->isi_about ?>);">
          </div>
        <?php } } ?>
        </div>
        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
          <div class="about-desc">
            <span class="heading-meta">ABOUT</span>
            <h1 class="colorlib-heading">PUSPIDEP</h1>
            <?php foreach ($tampil_about as $tampil) {
            if($tampil->place == 2){
            echo $tampil->isi_about;
          }
            } ?>
        </div>
          <div class="row padding">
            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
              <a href="#" class="steps active">
                <p class="icon"><span><i class="icon-check"></i></span></p>
                <h3>Konsentrasi <br>Keislaman</h3>
              </a>
            </div>
            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
              <a href="#" class="steps">
                <p class="icon"><span><i class="icon-check"></i></span></p>
                <h3>Konsentrasi <br>Demokrasi</h3>
              </a>
            </div>
            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
              <a href="#" class="steps">
                <p class="icon"><span><i class="icon-check"></i></span></p>
                <h3>Konsentrasi <br>Generasi Millenial</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  .
      <div class="row">
        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
          <h2 class="colorlib-heading">History</h2>
          <p><?php foreach ($tampil_about as $tampil) {
            if($tampil->place == 3){
            echo $tampil->isi_about;
          }
          } ?></p>
        </div>
        <div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
          <div class="fancy-collapse-panel">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Mengapa Puspidep?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                       <div class="panel-body">
                          <div class="row">
                          <div class="col-md-12">
                            <p><?php foreach ($tampil_about as $tampil) {
                            if($tampil->place == 4){
                              echo $tampil->isi_about;
                            }
                            } ?></p>

                          </div>

                        </div>
                       </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What We do?
                          </a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body">

                        <p><?php foreach ($tampil_about as $tampil) {
                        if($tampil->place == 5){
                          echo $tampil->isi_about;
                        }
                        } ?></p>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Our Specialties
                          </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                          <p><?php foreach ($tampil_about as $tampil) {
                            if($tampil->place == 6){
                              echo $tampil->isi_about;
                            }
                            } ?></p>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo base_url() ?>Assets/images/header.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="colorlib-narrow-content">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-md-3 text-center animate-box">
          <span class="icon"><i class="flaticon-sketch"></i></span>
          <span class="colorlib-counter js-counter" data-from="0" data-to="11" data-speed="100" data-refresh-interval="50"></span>
          <span class="colorlib-counter-label">Projects</span>
        </div>
        <div class="col-md-3 text-center animate-box">
          <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
          <span class="colorlib-counter js-counter" data-from="0" data-to="20" data-speed="100" data-refresh-interval="50"></span>
          <span class="colorlib-counter-label">Researchers</span>
        </div>
        <div class="col-md-3 text-center animate-box">
          <span class="icon"><i class="flaticon-engineering"></i></span>
          <span class="colorlib-counter js-counter" data-from="0" data-to="15" data-speed="100" data-refresh-interval="50"></span>
          <span class="colorlib-counter-label">Portofolio</span>
        </div>
        <div class="col-md-3 text-center animate-box">
          <span class="icon"><i class="flaticon-collaboration"></i></span>
          <span class="colorlib-counter js-counter" data-from="0" data-to="25" data-speed="100" data-refresh-interval="50"></span>
          <span class="colorlib-counter-label">Partners</span>
        </div>
      </div>
    </div>
  </div>

  <div id="get-in-touch" class="colorlib-bg-color">
    <div class="colorlib-narrow-content">
      <div class="row">
        <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
          <h2>Get in Touch</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
          <p class="colorlib-lead">Get close with Puspidep</p>
          <p><a href="contact.html" class="btn btn-primary btn-learn">Contact us</a></p>
        </div>

      </div>
    </div>
  </div>
</div>
