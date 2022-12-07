<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
    <?php $this->load->view('_partials/breadcumbs.php'); ?>
	<article class="article">
		<h1 class="post-title"><?= $course->title ? html_escape($course->title) : "No Title" ?></h1>
		<div class="post-meta">
			Published at <?= $course->created_at ?>
		</div>
		<div class="post-body">
			<?= $course->content ?>
		</div>
	</article>
	
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>