<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/_partials/header.php') ?>
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
                                    <div class="card-body"><a>Posts <a style="color:red;"><b><?= $course_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="main.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Feedback  <a style="color:red;"><b><?= $feedback_count ?></b></a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/feedback') ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Settings</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?= site_url('admin/setting') ?>">View Details</a>
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
                                <img src="assets/slide01.jpg" alt="Avatar" style="width:100%">
                                <div class="card">
                                    <h4>Hiring Databases</h4>
                                    <p>A recruitment database is a searchable repository of your jobs, contacts, applications, candidates, notes, and communications for easy access and reuse.These systems may help for HR.</p>
                                </div>
                            </div>

                            <div class="column">
                            <img src="assets/slide02.png" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h3>HRM Tools</h3>
                                <p>Human resource management is the strategic approach to the effective and efficient management of people in a company or organization such that they help their business gain a competitive advantage.</p>
                                </div>
                            </div>
                            
                            <div class="column">
                            <img src="assets/slide03.png" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h4>Employees Tracking</h4>
                                <p>Employee tracking or personnel management, is any system used to keep track of time card and office location information of employees. These systems may help to keep track of working hours</p>
                                </div>
                            </div>
                            
                            <div class="column">
                            <img src="assets/slide04.png" alt="Avatar" style="width:100%">
                                <div class="card">
                                <h3>Log Report</h3>
                                <p>Use the Reports and Logs page to view Provisioning Gateway events. You can view events by date ranges and filter events by type.These systems may help to gathering information from the system.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
      <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
  </main>
</body>

</html>