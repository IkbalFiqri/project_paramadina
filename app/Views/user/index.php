<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-xl-7 col-lg-9 text-center">
        <h1><?= $konfigurasi[0]['judul'] ?></h1>
        <h2><?= $konfigurasi[0]['deskripsi'] ?></h2>
      </div>
    </div>

    <div class="row icon-boxes">
    <?php foreach($program as $row) :?>
      <div class="col-md-2 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box">
          <img src="<?= base_url('assets/upload/image/' . $row['gambar']) ?>" class="img-fluid" alt="">
          <h4 class="title"><a href="<?= base_url('user/Program1')?>"><?= $row['nama'] ?></a></h4>
          <p class="description"><?= $row['deskripsi'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
     
    </div>

  </div>
</section>
<main id="main">

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p>Paramadina Bogor Homeschooling.</p>
      </div>

    </div>
  </section>

  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gallery</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-lg-12 d-flex justify-content-center">
        </div>
      </div>

      <div class="row gallery-container" data-aos="fade-up" data-aos-delay="300">

      <?php foreach($galeri as $row) : ?>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="gallery-wrap">
            <img src="<?= base_url('assets/upload/image/' . $row['gambar']) ?>" class="img-fluid" alt="">
            <div class="gallery-info">
              <div class="portfolio-links">
                <a href="<?= base_url('assets/upload/image/' . $row['gambar']) ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Paramadina Bogor Homeschooling"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; ?>
      
      </div>
    </div>
  </section>


  <section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Teacher</h2>
      </div>
      <div class="row">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php foreach ($guru as $row) : ?>

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="col-lg-12 col-md-6 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                      <div class="member-img">
                        <img src="<?= base_url('assets/upload/image/' . $row['gambar']) ?>" class="img-fluid" alt="">
                        <div class="social">
                          <a href="https://www.instagram.com/<?= $row['instagram'] ?>"><i class="bi bi-instagram"></i></a>
                          <a href="https://www.linkedin.com/in/<?= $row['linkedin'] ?>"><i class="bi bi-linkedin"></i></a>
                        </div>
                      </div>
                      <div class="member-info">
                        <h4><?= $row['nama'] ?></h4>
                        <span><?= $row['deskripsi'] ?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </div>
  </section>

  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonial</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <?php foreach ($testimoni as $row) : ?>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $row['testimoni'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="<?= base_url('assets/upload/image/thumbs/' . $row['gambar']) ?>" class="testimonial-img" alt="">
                <h3><?= $row['nama'] ?></h3>
                <h4><?= $row['deskripsi'] ?></h4>
              </div>
            </div>

          <?php endforeach; ?>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

</main>