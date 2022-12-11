<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/header.php'); ?>
</head>

<body>

	<?php $this->load->view('_partials/navbar.php'); ?>
    <?php $this->load->view('_partials/breadcumbs.php'); ?>
	<article class="article">
		<h1 class="post-title"><?= $blog->title ? html_escape($blog->title) : "No Title" ?></h1>
		<div class="post-meta">
			Published at <?= $blog->created_at ?>
		</div>
		<div class="post-body">
			<?= $blog->content ?>
		</div>
	</article>
	
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>