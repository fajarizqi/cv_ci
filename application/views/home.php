<!DOCTYPE html>
<html class="wide wow-animation smoothscroll" lang="en">
  <?php
    include("partials/header.php");
  ?>
  <body>
    
    <!-- Page-->
    <div class="page">
      <!-- Page Header-->


      <!-- Swiper & parallax-->
      <section class="swiper-bg-wrap swiper-style-1 bg-gray-dark">
        <div>
          <div class="swiper-container swiper-slider swiper-bg" data-autoplay="3500" data-slide-effect="fade">
            <div class="swiper-wrapper">
              <div class="swiper-slide" data-slide-bg="<?= base_url('assets/images/slide-1.jpg'); ?>"></div>
              <!-- <div class="swiper-slide" data-slide-bg="assets/images/slider1-slide-2.jpg"></div>
              <div class="swiper-slide" data-slide-bg="assets/images/slider1-slide-3.jpg"></div> -->
            </div>
            <!-- Swiper pagination-->
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-bg-content custom-parallax-wrap">
            <div class="jumbotron-custom jumbotron-custom-1 custom-parallax" data-speed="0.8" data-fade="true">
              <div class="jumbotron-custom__inner">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col-lg-12 col-xl-8">
                      <div class="hgroup">
                        <h1 class="wow fadeInUpSmall" data-wow-delay=".1s"><?php echo $home["nama_pendek"]; ?></h1>
                      </div>
                      <p class="big wow fadeInUpSmall" data-wow-delay=".3s" style="font-size: 25px">Web and Graphic desainer</p>
                      <a class="button button-wa" href="<?= $home['link_wa']?>" data-wow-delay=".33s">chat me</a>
                      <div class="icon-pack">
                          <div class="icon-sosmed icon-fb  wow fadeInUpSmall" data-wow-delay=".1s">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                           </div>
                           <div class="icon-sosmed icon-ig  wow fadeInUpSmall" data-wow-delay=".1s">
                              <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="icon-sosmed icon-linked  wow fadeInUpSmall" data-wow-delay=".1s">
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About Our Church-->
      <section class="section-md bg-default text-center text-lg-left">
        <div class="container">
          <div class="row justify-content-md-center align-items-lg-center flex-lg-row-reverse row-50">
            <div class="col-md-8 col-lg-6">
              <figure class="figure-bordered"><img src="<?= base_url("assets/images/biodata/") . $home["foto"] ?>" alt="" width="485" height="479"/>
              </figure>
            </div>
            <div class="col-md-9 col-lg-6">
              <h2>Hallo </h2>
              <p> <?php echo $home["resume"]; ?></p>
              <ul>
                <li class="li-bio">
                  <span class="judul-biodata">Nama</span>
                  <span><?php echo $home["nama"]; ?></span>
                </li>
                <li class="li-bio">
                  <span class="judul-biodata">Kelamin</span>
                  <?php
                  if($home['jenis_kelamin'] == 'L'){
                    ?>
                    <span>Laki-Laki</span>
                    <?php
                    }else if($home['jenis_kelamin'] == 'P'){
                      ?>
                      <span>Perempuan</span>
                      <?php
                      }
                    ?>
                </li>
                <li class="li-bio">
                    <span class="judul-biodata">Tempat, Tanggal Lahir</span>
                  <span><?php echo $home["ttl"]; ?></span>
                </li>
                <li class="li-bio">
                    <span class="judul-biodata">Agama</span>
                    <span><?php echo $home["agama"]; ?></span>
                </li>
                <li class="li-bio">
                    <span class="judul-biodata">Alamat</span>
                  <span><?php echo $home["alamat"]; ?></span>
                </li>
                <li class="li-bio">
                    <span class="judul-biodata">e-mail</span>
                    <span><?php echo $home["email"]; ?></span>
                </li>
                <li class="li-bio">
                    <span class="judul-biodata">Telephone</span>
                    <span><?php echo $home["telpon"]; ?></span>
                </li>
              </ul>
               
            </div>
          </div>
        </div>
      </section>

      <!-- Education Record -->
      <section class="eduex">
        <div class="container" >
          <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li>
                    <div class="top-branch">
                      <div class="div-branch-icon"><i class="fa fa-graduation-cap brach-icon"></i></div>
                      <span class="branch-title">EDUCATION</span>
                    </div>
                  </li>
                  <?php foreach($pendidikan as $edu) {?>
                  <li>
                    <div class="bordered-branch">
                      <div class="education-div">
                          <h6><?= $edu->judul ?></h6>
                          <p class="edu-tahun"><?= $edu->tahun ?></p>
                          <p style="margin-top: 10px;"><?= $edu->keterangan ?></p>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>

              <div class="col-lg-6">
                <ul>
                  <li>
                    <div class="top-branch">
                      <div class="div-branch-icon"><i class="fa fa-building brach-icon"></i></div>
                      <span class="branch-title">EXPERIENCE</span>
                    </div>
                  </li>
                  <?php foreach($pengalaman as $exp) {?>
                  <li>
                    <div class="bordered-branch">
                      <div class="education-div">
                          <h6><?= $exp->judul ?></h6>
                          <p class="edu-tahun"><?= $exp->tahun ?></p>
                          <p style="margin-top: 10px;"><?= $exp->keterangan ?></p>
                      </div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
          </div>
        </div>
      </section>

      <!-- Main services-->
      <section class="text-center bg-image parallax-container" data-parallax-img="assets/images/bg-image-9.jpg">
        <div class="parallax-content">
          <div class="section-md">
            <div class="container">
              <div class="list-boxed-wrap">
                  <div class="row">
                    <?php foreach($keahlian as $ahli) {?>
                      <div class="col-lg-4 pendidikan" style="">
                        <div class="list-boxed__icon "><i class="fa <?=$ahli->icon?>"></i></div>
                        <p class="list-boxed__title"> <?=$ahli->judul?></p>
                        <p class="list-boxed__text">  <?=$ahli->keterangan?></p>
                      </div>
                  <?php } ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container">
          <h3 class="skill-title">My Skills</h3>
          <div class="row">
            <div class="col-lg-6">
            <?php foreach($skill as $s) {?>
              <div class="skils-container">
                <div class="judul-skill">
                  <span class="first"><?=$s->judul?></span>
                  <span class="second"><?=$s->persentase?></span>
                </div>
                <div class="skills-bar">
                  <div class="skill-value" style="width: <?=$s->persentase?>; background-color:<?=$s->warna?>"></div>
                </div>
              </div>
            <?php } ?>
            </div>
            <!-- <div class="col-lg-6">
              <div class="skils-container-right">
                <div class="judul-skill">
                  <span class="first">Corel Draw</span>
                  <span class="second">90%</span>
                </div>
                <div class="skills-bar">
                  <div class="skill-value-cdr"></div>
                </div>
              </div>
              <div class="skils-container-right">
                  <div class="judul-skill">
                    <span class="first">Photosop</span>
                    <span class="second">75%</span>
                  </div>
                  <div class="skills-bar">
                    <div class="skill-value-ps"></div>
                  </div>
                </div>
            </div> -->
          </div>
        </div>
      </section>

      <!-- Gallery-->
      <section class="section-md bg-default text-center">
        <div class="container gallery-wrap">
          <div class="row justify-content-lg-center gallery-wrap-top">
            <div class="col-md-4">
              <h2>My Project</h2>
            </div>
          </div>
          <div class="row row-30 align-items-md-end gallery-wrap-bottom" data-lightgallery="group">
            <div class="col-md-4">
              <!-- Thumb bubba--><a class="thumb-bubba__link" href="assets/images/supermarket.png" data-lightgallery="item">
                <div class="thumb-bubba">
                  <figure><img src="assets/images/supermarket.png" alt="" width="368" height="236"/>
                  </figure>
                  <div class="thumb-bubba__overlay"></div>
                </div></a><a class="thumb-bubba__link" href="assets/images/gallery-2-1200x800_original.jpg" data-lightgallery="item">
                <div class="thumb-bubba">
                  <figure><img src="assets/images/gallery2-2-368x361.jpg" alt="" width="368" height="361"/>
                  </figure>
                  <div class="thumb-bubba__overlay"></div>
                </div></a>
            </div>
            <div class="col-md-4"><a class="thumb-bubba__link" href="assets/images/gallery1-3-900x1200_original.jpg" data-lightgallery="item">
                <div class="thumb-bubba">
                  <figure><img src="assets/images/gallery1-3-368x462.jpg" alt="" width="368" height="462"/>
                  </figure>
                  <div class="thumb-bubba__overlay"></div>
                </div></a></div>
            <div class="col-md-4"><a class="thumb-bubba__link" href="assets/images/denpasar.png" data-lightgallery="item">
                <div class="thumb-bubba">
                  <figure><img src="assets/images/denpasar.png" alt="" width="368" height="236"/>
                  </figure>
                  <div class="thumb-bubba__overlay"></div>
                </div></a><a class="thumb-bubba__link" href="assets/images/gallery-4-1200x800_original.jpg" data-lightgallery="item">
                <div class="thumb-bubba">
                  <figure><img src="assets/images/gallery2-4-368x361.jpg" alt="" width="368" height="361"/>
                  </figure>
                  <div class="thumb-bubba__overlay"></div>
                </div></a></div>
          </div>
        </div>
      </section>

     <!-- Page Footer -->
      
     <footer class="page-footer-default bg-gray-dark text-center ">
        <div class="container">
          <div class="row row-30 align-items-sm-center flex-md-row-reverse row-15">
            <div class="col-md-6 column-center text-md-left footer-home">
              <p class="rights">Fajart Garage&nbsp;&copy;&nbsp;<span class="copyright-year"></span></a>
              </p>
            </div>
            <div class="col-md-6 column-center footer-home">
              <div class="unit justify-content-center justify-content-md-end align-items-center text-md-right">
                <div class="unit-left">
                  <p class="font-weight-bold">Follow Us:</p>
                </div>
                <div class="unit-body">
                  <ul class="list-inline-xs">
                    <li><a class="icon icon-md icon-default fa fa-facebook-square" href="#"></a></li>
                    <li><a class="icon icon-md icon-default fa fa-instagram" href="#"></a></li>
                    <li><a class="icon icon-md icon-default fa fa-linkedin-square" href="#"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <?php
      include("partials/script.php");
    ?>
  </body>
</html>