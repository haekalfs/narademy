<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
  <style>p.new {
     width: 250px;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;
}</style>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>

	<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>blogs</h2>
          <p>Browse all of our available blogs and claim your certificate.</p>
        </div>
        <div class="row">
        <?php foreach ($blogs as $blog) : ?>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="<?= site_url('blog/'.$blog->slug) ?>"><?= $blog->title ? html_escape($blog->title) : "No Title" ?></a></h4>
              <p class="new"><?= substr_replace($blog->content, "...", 180); ?></p>
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