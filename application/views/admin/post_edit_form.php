<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
	<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
					<h1 class="mt-4">Edit Post</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
							<li class="breadcrumb-item active">Edit Posts</li>
						</ol>

			<form action="" method="POST">
				<div>
					<label for="title">Title*</label>
					<input type="text" name="title" class="<?= form_error('title') ? 'invalid' : '' ?> form-control"
					value="<?= form_error('title') ? set_value('title') : $course->title ?>" 
					required maxlength="128"/>
					<div class="invalid-feedback">
						<?= form_error('title') ?>
					</div>
				</div>

				<div>
					<label for="content">Konten</label>
					<?php $content = form_error('content') ? set_value('content') : $course->content ?>
					<input type="hidden" name="content" value="<?= html_escape($content) ?>">
					<div id="editor" style="min-height: 160px;"><?= $content ?></div>
				</div>
<br>
				<div>
					<button type="submit" name="draft" class="btn btn-dark" value="true">Save to Draft</button>
					<button type="submit" name="draft" class="btn btn-primary" value="false">Publish Update</button>
					<div class="invalid-feedback">
						<?= form_error('draft') ?>
					</div>
				</div>
			</form>
			<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
			<script>
				var quill = new Quill('#editor', {
					theme: 'snow',
					modules: {
						toolbar: [
								[{ header: [1, 2, 3, 4, 5, 6, false] }],
								[{ font: [] }],
								["bold", "italic"],
								["link", "blockquote", "code-block", "image"],
								[{ list: "ordered" }, { list: "bullet" }],
								[{ script: "sub" }, { script: "super" }],
								[{ color: [] }, { background: [] }],
						]
				},
				});
				quill.on('text-change', function(delta, oldDelta, source) {
					document.querySelector("input[name='content']").value = quill.root.innerHTML;
				});
			</script>
		</div>
		<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>