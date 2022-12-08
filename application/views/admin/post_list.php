<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
	<style>
		/* Pagination styles */
.pagination {
	display: flex;
	padding: 1em 0;
}

.pagination a,
.pagination strong {
	border: 1px solid silver;
	border-radius: 8px;
	color: black;
	padding: 0.5em;
	margin-right: 0.5em;
	text-decoration: none;
}

.pagination a:hover,
.pagination strong {
	border: 1px solid #008cba;
	background-color: #008cba;
	color: white;
}
	</style>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div id="layoutSidenav_content">
			<div class="container-fluid px-4">
                <h1 class="mt-4">Manage Posts</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Posts</li>
                    </ol>
		<div>
            <div>
                <form action="" method="GET">
                    <input style="margin: 0; width:360px; float:left;" class="form-control" type="search" name="keyword" placeholder="Search Posts" value="<?= html_escape($keyword) ?>">
                    <input style="margin: 0;" type="submit" value="Search" class="btn btn-primary" >
                </form>
            </div>
        </div><br>
		<div class="row">
    				<div class="col-xl-12">
                        <div class="card mb-4">
                            <div class="card-body">
		<table class="table">
			<a href="<?= site_url('admin/post/new') ?>" class="btn btn-primary" role="button">+ Tulis Artikel</a>
				<thead>
					<tr>
						<th>Title</th>
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($courses as $course): ?>
					<tr>
						<td>
							<div><?= $course->title ?></div>
							<div class="text-gray"><small><?= $course->created_at ?><small></div>
						</td>
						<?php if($course->draft === 'true'): ?>
							<td class="text-center text-gray">Draft</td>
						<?php else: ?>
							<td class="text-center text-green">Published</td>
						<?php endif ?>
						<td>
							<div class="action">
								<a href="<?= site_url('course/'.$course->slug) ?>" class="btn btn-primary" target="_blank" role="button">Preview</a>
								<a href="<?= site_url('admin/post/edit/'.$course->id) ?>" class="btn btn-warning" role="button">Edit</a>
								<a href="#" 
									data-delete-url="<?= site_url('admin/post/delete/'.$course->id) ?>" 
									class="btn btn-danger"
									role="button"
									onclick="deleteConfirm(this)">Delete</a>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
					</table>
				</div>
			</div></tbody><?=  $this->pagination->create_links(); ?>
		</div>
	</div>
</div>
            
<?php $this->load->view('admin/_partials/footer.php') ?>
	</div>
</main>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		function deleteConfirm(event){
			Swal.fire({
				title: 'Delete Confirmation!',
				text: 'Are you sure to delete the item?',
				icon: 'warning',
				showCancelButton: true,
				cancelButtonText: 'No',
				confirmButtonText: 'Yes Delete',
				confirmButtonColor: 'red'
			}).then(dialog => {
				if(dialog.isConfirmed){
					window.location.assign(event.dataset.deleteUrl);
				}
			});
		}
	</script>

	<?php if($this->session->flashdata('message')): ?>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>