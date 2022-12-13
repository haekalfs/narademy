<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/header.php') ?>
  <style>      
            * {
            box-sizing: border-box;
            }
            /* Float four columns side by side */
            .column {
            float: left;
            width: 25%;
            padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 600px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
            }

            /* Style the counter cards */
            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            background-color: #f1f1f1;
            }
        </style>
</head>

<body>
  <main class="main">
    <?php $this->load->view('admin/_partials/side_nav.php') ?>

    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><a>Courses <a style="color:red;"><b><?= $course_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/post') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Blogs <a style="color:red;"><b><?= $blog_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/blog') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Feedback <a style="color:red;"><b><?= $feedback_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/feedback') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Log Out</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('auth/logout') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"  style="font-family: poppins;">
                            <div class="column">
                                <img src="<?= base_url("assets/img/admin-bg01.png") ?>" alt="Avatar" style="width:100%">
                                <div class="card">
                                    <h4>What's Narademy?</h4>
                                    <p>Narademy is website education. Narademy is not just about learning but it allows people to share their knowledge to the others, so they can grow together.</p>
                                </div>
                            </div>

                            <div class="column">
                            <img src="<?= base_url("assets/img/admin-bg04.png") ?>" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h3>Know Yourself</h3>
                                <p>Don't aim to be understood by others before you understand yourself. People may never understand your intentions. You know them.</p><br>
                                </div>
                            </div>
                            
                            <div class="column">
                            <img src="<?= base_url("assets/img/admin-bg06.png") ?>" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h4>Pink Roses</h4>
                                <p>If you are not enough for yourself you will never be enough for someone else.</p><br><br><br>
                                </div>
                            </div>
                            
                            <div class="column">
                            <img src="<?= base_url("assets/img/admin-bg02.png") ?>" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h3>Be True</h3>
                                <p>If you don't stop judging yourself, putting yourself down, believing that this is as good as you can be, then you've closed doors for yourself before they even appear in front of you.</p>
                                </div>
                            </div>
                        </div><br>
                    </div>
                </main>
      <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
  </main>
</body>

</html>