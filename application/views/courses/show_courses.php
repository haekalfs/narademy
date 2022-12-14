<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
	<style>
	div.excerpt {
     width: 250px;
     white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;
	}
	</style>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
	<?php $this->load->view('_partials/breadcumbs.php'); ?>
	<div class="container">
		<article class="article"><br>
			<h1 class="post-title"><?= $course->title ? html_escape($course->title) : "No Title" ?></h1>
			<hr>
			<div class="post-meta">
				<i>Published at <?= $course->created_at ?></i>
			</div><br>

			<div class="row content">
				<div class="col-lg-6">
					<?= $course->content ?>
					<div>
						<a id="printCert" style="display: none;" class="btn btn-primary" href="<?= site_url('certification') ?>">Print Certificate</a>
					</div>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<video onended="videoEnd()" autoplay width="660" height="315" src="<?= $course->link ?>"
						title="<?= $course->title ? html_escape($course->title) : "No Title" ?>" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></video>
				</div>
			</div>
		</article>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

<script type='text/javascript'>
  function videoEnd(){
	var a = document.getElementById("printCert");
		if (a.style.display === "none") {
			a.style.display = "block";
		} else {
			a.style.display = "none";
		}
  }
</script>
</html>
