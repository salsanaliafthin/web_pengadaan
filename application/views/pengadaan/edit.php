<?php $this->load->view('header') ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">EDIT PPENGADAAN</h2>
                            <p class="pageheader-text">JSM</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Tabel PENGADAAN/h5>

                            <div class="card-body">
                                <form action="" method="post">
                                    <?php echo validation_errors(); ?>
                                    <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="<?php echo $datauser->nama ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">npp</label>
                                    <input type="text" name="npp" class="form-control" value="<?php echo $datauser->npp ?>">
                                </div>

                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo $datauser->email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">username</label>
                                    <input type="text" name="username" class="form-control" value="<?php echo $datauser->username ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">password</label>
                                    <input type="text" name="password" class="form-control" value="<?php echo $datauser->password ?>">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2019. All rights reserved.</a>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
<?php $this->load->view('footer') ?>