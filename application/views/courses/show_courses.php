<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
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
			</div>
			<div class="post-body"><br>
				<?= $course->content ?>
			</div>
			<div>
				<iframe autoplay width="860" height="315" src="<?= $course->link ?>" title="<?= $course->title ? html_escape($course->title) : "No Title" ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</article>
	</div>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
