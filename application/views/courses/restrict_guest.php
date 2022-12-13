<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>

	<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Browse all of our available courses and claim your certificate.</p>
        </div>
        <div class="text-end">
        <a href="<?= site_url('search') ?>" class="btn btn-primary">Search Courses <i class="bi-search"></i></a><br><br><br>
        </div>
        <div class="row">
        <?php foreach ($courses as $course) : ?>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box" style="height: 280px;">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>
                <a 
                  href="<?php if($this->session->userdata('access')=='1'):?>
                          <?= site_url('course/'.$course->slug) ?>
                        <?php elseif($this->session->userdata('access')=='2'):?>
                          <?= site_url('course/'.$course->slug) ?>
                        <?php else:?>
                          # <?php endif;?>">
                  <?= $course->title ? html_escape($course->title) : "No Title" ?>
                </a>
              </h4>
              <p style=" width: 250px;"><?= substr_replace($course->content, "...", 80); ?></p>
            </div>
          </div>
		  <?php endforeach ?>
		</div>
      </div>
    </section><!-- End Services Section -->
    <?=  $this->pagination->create_links(); ?>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>